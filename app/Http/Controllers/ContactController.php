<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;
use Inertia\Inertia;

class ContactController extends Controller
{
    public function show()
    {
        return Inertia::render('Contact');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'subject' => 'nullable|string|max:255',
            'message' => 'required|string|max:1000',
        ]);

        try {
            // Envoyer l'email en texte brut
            $emailContent = "Nouveau message de contact - Infinity Dev\n\n";
            $emailContent .= "Nom: " . $request->name . "\n";
            $emailContent .= "Email: " . $request->email . "\n";
            $emailContent .= "Objet: " . ($request->subject ?? 'Aucun sujet') . "\n";
            $emailContent .= "Message:\n" . $request->message . "\n\n";
            $emailContent .= "Merci de répondre à ce client dans les plus brefs délais.\n\n";
            $emailContent .= "Cordialement,\nL'équipe Infinity Dev";

            Mail::raw($emailContent, function ($message) use ($request) {
                $message->to('zakaria.aaddi@gmail.com')
                        ->subject('Nouveau message de contact - Infinity Dev')
                        ->from(config('mail.from.address'), config('mail.from.name'))->replyTo($request->email, $request->name);
            });

            return redirect()->back()->with('success', 'Votre message a été envoyé avec succès !');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Une erreur est survenue lors de l\'envoi du message. Veuillez réessayer.');
        }
    }
}
