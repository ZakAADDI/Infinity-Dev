<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nouveau message de contact - Infinity Dev</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }
        .header {
            background: linear-gradient(135deg, #7c3aed, #3b82f6);
            color: white;
            padding: 30px;
            text-align: center;
            border-radius: 10px 10px 0 0;
        }
        .content {
            background: #f8fafc;
            padding: 30px;
            border-radius: 0 0 10px 10px;
        }
        .field {
            margin-bottom: 20px;
        }
        .field-label {
            font-weight: bold;
            color: #7c3aed;
            margin-bottom: 5px;
        }
        .field-value {
            background: white;
            padding: 15px;
            border-radius: 8px;
            border-left: 4px solid #7c3aed;
        }
        .footer {
            text-align: center;
            margin-top: 30px;
            color: #6b7280;
            font-size: 14px;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Infinity Dev</h1>
        <p>Nouveau message de contact</p>
    </div>
    
    <div class="content">
        <p>Bonjour,</p>
        
        <p>Vous avez reçu un nouveau message de contact via le site web Infinity Dev.</p>
        
        <div class="field">
            <div class="field-label">Nom :</div>
            <div class="field-value">{{ $name }}</div>
        </div>
        
        <div class="field">
            <div class="field-label">Email :</div>
            <div class="field-value">{{ $email }}</div>
        </div>
        
        <div class="field">
            <div class="field-label">Objet :</div>
            <div class="field-value">{{ $subject }}</div>
        </div>
        
        <div class="field">
            <div class="field-label">Message :</div>
            <div class="field-value">{{ $message }}</div>
        </div>
        
        <p>Merci de répondre à ce client dans les plus brefs délais.</p>
        
        <p>Cordialement,<br>L'équipe Infinity Dev</p>
    </div>
    
    <div class="footer">
        <p>Cet email a été envoyé automatiquement depuis le formulaire de contact du site Infinity Dev.</p>
    </div>
</body>
</html>

