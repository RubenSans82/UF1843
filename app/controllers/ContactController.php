<?php
namespace Ruben\controllers;
use Ruben\core\Controller;
use Ruben\models\Contact;
use function Symfony\Component\Clock\now;
class ContactController extends Controller
{
    public function index(...$params)
    {
        $contact = Contact::all();
        $this->view('contact_list', $contact);
    }
    public function new(...$params)
    {
        if (isset($_POST["nombre"])) {
            $contact = new Contact();
            $contact->nombre = $_POST["nombre"];
            $contact->telefono = $_POST["telefono"];
            $contact->email = $_POST["email"];
            $contact->direccion = $_POST["direccion"];
            $contact->fecha_creacion = now();
            $contact->save();
            header('Location: '.BASE_URL.'contact/');

        }
        $this->view('new_contact');
    }

    public function edit(...$params)
    {
        if (isset($_POST["nombre"])) {
            $contact = Contact::find($params[0]);
            $contact->nombre = $_POST["nombre"];
            $contact->telefono = $_POST["telefono"];
            $contact->email = $_POST["email"];
            $contact->direccion = $_POST["direccion"];
            $contact->save();
            header('Location: '.BASE_URL.'contact/');
        }
        $contact = Contact::find($params[0]);
        $this->view('edit_contact', $contact);
    }

    public function delete(...$params)
    {
        $contact = Contact::find($params[0]);
        $contact->delete();
        header('Location: '.BASE_URL.'contact/');
    }
}