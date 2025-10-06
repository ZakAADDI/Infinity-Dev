# Infinity Dev - Site Vitrine

Un site vitrine moderne et professionnel pour l'auto-entreprise Infinity Dev, développé avec Laravel 12, Vue 3, Inertia.js, Tailwind CSS et Vite.

## 🚀 Technologies Utilisées

- **Backend** : Laravel 12
- **Frontend** : Vue 3 + Inertia.js
- **Styling** : Tailwind CSS
- **Build Tool** : Vite
- **Mailer** : Laravel Mail (configuré pour le développement)

## 🎨 Design & Thème

Le site utilise un thème de couleurs moderne avec :
- **Violet** (#7c3aed) - Couleur principale
- **Bleu** (#3b82f6) - Couleur secondaire
- **Blanc** - Arrière-plans et textes
- **Gris** - Éléments secondaires

## 📱 Pages Disponibles

### 1. Page d'Accueil (`/`)
- Section hero avec dégradé violet → bleu
- Présentation d'Infinity Dev
- Slogan et description
- Bouton CTA "Me contacter"
- Section des fonctionnalités

### 2. Page À Propos (`/about`)
- Présentation personnelle
- Technologies maîtrisées (badges colorés)
- Expérience et expertise
- Appel à l'action vers la page contact

### 3. Page Contact (`/contact`)
- Formulaire de contact complet
- Validation côté client et serveur
- Envoi d'email automatique
- Message de confirmation
- Informations de contact

## 🛠️ Installation & Configuration

### Prérequis
- PHP 8.2+
- Composer
- Node.js 18+
- npm ou yarn

### 1. Cloner le projet
```bash
git clone <repository-url>
cd infinity-dev-web-app
```

### 2. Installer les dépendances PHP
```bash
composer install
```

### 3. Installer les dépendances Node.js
```bash
npm install
```

### 4. Configuration de l'environnement
```bash
cp .env.example .env
```

Configurer le fichier `.env` :
```env
APP_NAME="Infinity Dev"
APP_URL=http://localhost:8000

# Configuration Mail (pour le développement)
MAIL_MAILER=log
MAIL_FROM_ADDRESS=contact@infinitydev.com
MAIL_FROM_NAME="Infinity Dev"
```

### 5. Générer la clé d'application
```bash
php artisan key:generate
```

### 6. Compiler les assets
```bash
npm run dev
```

### 7. Lancer le serveur de développement
```bash
php artisan serve
```

## 📧 Configuration des Emails

### Développement
Par défaut, les emails sont loggés dans `storage/logs/laravel.log` pour le développement.

### Production
Pour la production, configurez un service SMTP dans le fichier `.env` :
```env
MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=votre-email@gmail.com
MAIL_PASSWORD=votre-mot-de-passe-app
MAIL_ENCRYPTION=tls
```

## 🎯 Fonctionnalités

- **Design Responsive** : Optimisé pour tous les appareils
- **Navigation Mobile** : Menu hamburger pour mobile
- **Validation de Formulaire** : Côté client et serveur
- **Système de Mail** : Envoi automatique des messages de contact
- **Animations CSS** : Transitions et animations fluides
- **SEO Ready** : Structure HTML sémantique

## 🔧 Personnalisation

### Modifier les Informations Personnelles
- **Page About** : Modifier le nom et la description dans `resources/js/Pages/About.vue`
- **Email de Contact** : Modifier l'adresse dans `app/Http/Controllers/ContactController.php`

### Modifier le Design
- **Couleurs** : Modifier les classes Tailwind dans les composants Vue
- **Layout** : Personnaliser `resources/js/Layouts/AppLayout.vue`
- **Styles** : Ajouter des styles personnalisés dans les composants

### Modifier le Contenu
- **Textes** : Modifier directement dans les composants Vue
- **Images** : Remplacer les icônes SVG par vos propres images
- **Liens** : Modifier les liens dans la navbar et le footer

## 🚀 Déploiement

### Vercel (Recommandé pour les sites statiques)
1. Connecter votre repository GitHub
2. Configurer les variables d'environnement
3. Déployer automatiquement

### Serveur VPS
1. Uploader les fichiers sur votre serveur
2. Configurer le serveur web (Nginx/Apache)
3. Configurer les variables d'environnement
4. Installer les dépendances et compiler les assets

## 📝 Structure des Fichiers

```
infinity-dev-web-app/
├── app/
│   ├── Http/Controllers/
│   │   └── ContactController.php
│   └── Mail/
│       └── ContactMail.php
├── resources/
│   ├── js/
│   │   ├── Layouts/
│   │   │   └── AppLayout.vue
│   │   └── Pages/
│   │       ├── Home.vue
│   │       ├── About.vue
│   │       └── Contact.vue
│   └── views/
│       └── emails/
│           └── contact.blade.php
├── routes/
│   └── web.php
└── README.md
```

## 🤝 Support

Pour toute question ou support, contactez-nous via :
- **Email** : contact@infinitydev.dev
- **Site Web** : [infinity-dev.dev](https://infinity-dev.dev)

## 📄 Licence

Ce projet est développé pour Infinity Dev. Tous droits réservés.

---

**Infinity Dev** - Des solutions web & mobile sur mesure, adaptées à vos besoins.
