<template>
  <AppLayout>
    <Head title="Mentions Légales — Infinity Dev"
      :meta="[
        { name: 'description', content: 'Mentions légales du site Infinity Dev (éditeur, hébergeur, propriété intellectuelle, données personnelles, cookies, responsabilité).' },
        { property: 'og:title', content: 'Mentions Légales — Infinity Dev' },
        { property: 'og:description', content: 'Mentions légales du site Infinity Dev (éditeur, hébergeur, propriété intellectuelle, données personnelles, cookies, responsabilité).' },
        { property: 'og:type', content: 'website' }
      ]"
      :link="[
        { rel: 'canonical', href: 'https://infinity-dev.dev/legal-notice' }
      ]"
    />

    <!-- Hero Section -->
    <section class="bg-gradient-to-r from-violet-600 to-blue-600 py-10">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-5xl md:text-6xl font-bold text-white mb-6">
          Mentions Légales
        </h1>
        <p class="text-xl text-violet-100 max-w-3xl mx-auto">
          Informations légales et obligations réglementaires
        </p>
      </div>
    </section>

    <!-- Main Content -->
    <section class="py-20">
      <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="bg-white rounded-2xl shadow-xl p-8">
          <div class="prose prose-lg max-w-none text-gray-800">
            <h2 class="text-2xl font-bold text-gray-900 mb-4">1. Éditeur du site</h2>
            <p class="text-justify leading-relaxed">
              <strong>Nom et Prénom :</strong> AADDI Zakaria<br>
              <strong>Statut :</strong> Micro-entrepreneur (auto-entrepreneur)<br>
              <strong>Activité :</strong> Conception et développement d’applications web et mobiles<br>
              <strong>Adresse :</strong> 74960 Annecy<br>
              <strong>SIRET :</strong> 94036241100024<br>
              <strong>Numéro TVA intracommunautaire :</strong> Non assujetti à la TVA, art. 293 B du CGI<br>
              <strong>Téléphone :</strong> Pour toute demande, vous pouvez contacter via le formulaire de contact<br>
              <strong>Adresse e-mail :</strong> Pour toute demande, vous pouvez contacter via le formulaire de contact<br>
              <strong>Responsable de la publication :</strong> AADDI Zakaria
            </p>

            <h2 class="text-2xl font-bold text-gray-900 mt-10 mb-4">2. Hébergeur du site</h2>
            <p class="text-justify leading-relaxed">
              <strong>Nom de l’hébergeur :</strong> OVH<br>
              <strong>Adresse :</strong> 2 rue Kellermann, 59100 Roubaix<br>
              <strong>Téléphone :</strong> 1007 ou +33 9 72 10 10 07 depuis une ligne en dehors de la France<br>
              <strong>Site web :</strong> <a href="https://www.ovhcloud.com/" target="_blank" rel="noopener" class="text-blue-600 underline">https://www.ovhcloud.com/</a>
            </p>

            <h2 class="text-2xl font-bold text-gray-900 mt-10 mb-4">3. Propriété intellectuelle</h2>
            <p class="text-justify leading-relaxed">
              L’ensemble du contenu présent sur ce site (textes, images, graphismes, logos, vidéos, icônes, code, etc.) est la propriété exclusive de Zakaria AADDI - Infinity Dev, sauf mention contraire.
              Toute reproduction, distribution, modification, adaptation ou publication, même partielle, est strictement interdite sans l’accord écrit préalable de l’éditeur.
            </p>

            <h2 class="text-2xl font-bold text-gray-900 mt-10 mb-4">4. Protection des données personnelles (RGPD)</h2>
            <p class="text-justify leading-relaxed">
              Les informations recueillies via le site (formulaire de contact, etc.) sont destinées exclusivement à Zakaria AADDI - Infinity Dev pour la gestion des demandes et la relation client.
              Conformément au Règlement Général sur la Protection des Données (RGPD), tu disposes d’un droit d’accès, de rectification et de suppression de tes données.
              Pour exercer ces droits utilisez le formulaire de contact. Aucune donnée personnelle n’est vendue ni transmise à des tiers.
            </p>

            <h2 class="text-2xl font-bold text-gray-900 mt-10 mb-4">5. Cookies</h2>
            <p class="text-justify leading-relaxed">
              Le site peut utiliser des cookies pour améliorer la navigation ou mesurer l’audience. Tu peux configurer ton navigateur pour les accepter ou les refuser à tout moment.
            </p>

            <h2 class="text-2xl font-bold text-gray-900 mt-10 mb-4">6. Responsabilité</h2>
            <p class="text-justify leading-relaxed">
              L’éditeur du site ne saurait être tenu responsable des erreurs ou omissions, ni de tout dommage direct ou indirect résultant de l’utilisation du site.
            </p>
          </div>
        </div>
      </div>
    </section>
  </AppLayout>
  </template>

<script setup>
import AppLayout from '@/Layouts/AppLayout.vue'
import { Head } from '@inertiajs/vue3'
</script>


