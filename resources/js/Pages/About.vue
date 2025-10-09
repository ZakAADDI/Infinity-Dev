<template>
  <AppLayout>

    <Head title="À propos — Infinity Dev" :meta="[
      { name: 'description', content: 'Présentation du fondateur, expertise, technologies et projets réalisés.' },
      { property: 'og:title', content: 'À propos — Infinity Dev' },
      { property: 'og:description', content: 'Présentation du fondateur, expertise, technologies et projets réalisés.' },
      { property: 'og:type', content: 'website' }
    ]" :link="[
      { rel: 'canonical', href: 'https://infinity-dev.dev/about' }
    ]" />
    <!-- Hero Section -->
    <section class="bg-gradient-to-r from-violet-600 to-blue-600 py-10">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <div class="flex justify-center">
          <img src="/public/assets/images/logo-infinity-dev.png" alt="Logo Infinity Dev" class="h-10" loading="lazy">
        </div>
        <h1 class="text-5xl mt-2 md:text-6xl font-bold text-white mb-6">
          À propos du fondateur
        </h1>
        <p class="text-xl text-violet-100 max-w-3xl mx-auto">
          Découvrez son parcours et son expertise en développement
        </p>
      </div>
    </section>

    <!-- Main Content -->
    <section class="py-20">
      <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Personal Introduction -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
          <div class="text-center mb-8">
            <div
              class="w-32 h-32 bg-gradient-to-r from-violet-500 to-blue-500 rounded-full mx-auto mb-6 flex items-center justify-center">
              <img src="/public/assets/images/image-profil.png"
                alt="Portrait de Zakaria AADDI, fondateur d’Infinity Dev" loading="lazy">
            </div>
            <h2 class="text-3xl font-bold text-gray-900 mb-4">Zakaria AADDI</h2>
            <p class="text-xl text-violet-600 font-semibold">Fondateur d'Infinity Dev</p>
          </div>

          <div class="prose prose-lg max-w-none text-gray-700 text-center">
            <p class="font-style: italic text-justify text-lg leading-relaxed mb-6">
              " J'aime créer des solutions utiles, efficaces et centrées sur l’humain. Je conçois et développe des
              applications modernes, sur mesure et adaptées aux besoins réels de mes clients. Au-delà du code, je mets
              l’accent sur l’écoute, la transparence et l’humain. Pour moi, chaque projet est avant tout une
              collaboration, pas juste une mission. "
            </p>
          </div>
        </div>

        <!-- Experience Section -->
        <div class="bg-white to-blue-600 rounded-2xl shadow-xl p-8 mb-12">
          <h3 class="text-2xl font-bold text-gray-900 mb-4 text-center">Dernière expérience</h3>
          <p class="text-lg text-gray-700 text-justify leading-relaxed ">
            Au cours des 2,5 dernières années, <a href="https://www.linkedin.com/in/zakaria-aaddi/" target="_blank"
              class="text-[#0a66c2] font-bold">Zakaria AADDI</a> a évolué au sein de l’équipe R&D de <a
              href="https://www.hbblab.fr/" target="_blank" class="text-[#48a49d] font-bold">HBBlab</a> en CDI mais
            également en tant qu'indépendant. <a href="https://www.hbblab.fr/" target="_blank"
              class="text-[#48a49d] font-bold">HBBlab</a> est un fabricant de systèmes de diffusion TV professionnels à
            destination des établissements d’hébergement collectif, comme les hôpitaux, les hôtels et les grands
            groupes.
          </p>
        </div>

        <!-- Technologies Section -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
          <h3 class="text-2xl font-bold text-gray-900 mb-8 text-center">Technologies & Outils</h3>

          <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Web Development -->
            <div>
              <h4 class="text-xl font-semibold text-gray-800 mb-4 flex items-center">
                <svg class="w-6 h-6 text-violet-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M21 12a9 9 0 01-9 9m9-9a9 9 0 00-9-9m9 9H3m9 9a9 9 0 01-9-9m9 9c1.657 0 3-4.03 3-9s-1.343-9-3-9m0 18c-1.657 0-3-4.03-3-9s1.343-9 3-9m-9 9a9 9 0 019-9" />
                </svg>
                Développement Web
              </h4>
              <div class="flex flex-wrap gap-3">
                <span class="px-4 py-2 bg-violet-100 text-violet-800 rounded-full text-sm font-medium">Laravel</span>
                <span class="px-4 py-2 bg-violet-100 text-violet-800 rounded-full text-sm font-medium">Vue.js</span>
                <span class="px-4 py-2 bg-violet-100 text-violet-800 rounded-full text-sm font-medium">Django</span>
                <span class="px-4 py-2 bg-violet-100 text-violet-800 rounded-full text-sm font-medium">Tailwind
                  CSS</span>
              </div>
            </div>

            <!-- Mobile Development -->
            <div>
              <h4 class="text-xl font-semibold text-gray-800 mb-4 flex items-center">
                <svg class="w-6 h-6 text-blue-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z" />
                </svg>
                Applications Mobiles
              </h4>
              <div class="flex flex-wrap gap-3">
                <span class="px-4 py-2 bg-blue-100 text-blue-800 rounded-full text-sm font-medium">Flutter</span>
              </div>
            </div>

            <!-- Database & Tools -->
            <div>
              <h4 class="text-xl font-semibold text-gray-800 mb-4 flex items-center">
                <svg class="w-6 h-6 text-green-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4" />
                </svg>
                Bases de Données
              </h4>
              <div class="flex flex-wrap gap-3">
                <span class="px-4 py-2 bg-green-100 text-green-800 rounded-full text-sm font-medium">SQLite</span>
                <span class="px-4 py-2 bg-green-100 text-green-800 rounded-full text-sm font-medium">MariaDB</span>
              </div>
            </div>

            <!-- Version Control -->
            <div>
              <h4 class="text-xl font-semibold text-gray-800 mb-4 flex items-center">
                <svg class="w-6 h-6 text-gray-500 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M8 9l3 3-3 3m5 0h3M5 20h14a2 2 0 002-2V6a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                </svg>
                Contrôle de Version
              </h4>
              <div class="flex flex-wrap gap-3">
                <span class="px-4 py-2 bg-gray-100 text-gray-800 rounded-full text-sm font-medium">Git</span>
                <span class="px-4 py-2 bg-gray-100 text-gray-800 rounded-full text-sm font-medium">GitHub</span>
              </div>
            </div>
          </div>
        </div>

        <!-- Projects Section -->
        <div class="bg-white rounded-2xl shadow-xl p-8 mb-12">
          <h3 class="text-2xl font-bold text-gray-900 mb-6 text-center">Projets conçus et développés</h3>
          
          <div class="grid gap-6 md:grid-cols-2">
            <!-- HBBlab PMS -->
            <div class="bg-white rounded-xl p-6 border border-gray-200 shadow-sm">
              <div class="flex items-center mb-3">
                <div class="w-3 h-3 bg-violet-500 rounded-full mr-3"></div>
                <h4 class="text-lg font-bold text-gray-900">PMS</h4>
              </div>
              <p class="text-gray-700 mb-3">Système de gestion des droits TV avec ouverture et fermeture manuelle ou automatique des accès.</p>
              <div class="flex flex-wrap gap-2 mb-3">
                <span class="px-3 py-1 bg-violet-100 text-violet-800 rounded-full text-[12px] font-medium">Laravel</span>
                <span class="px-3 py-1 bg-violet-100 text-violet-800 rounded-full text-[12px] font-medium">Vue.js</span>
                <span class="px-3 py-1 bg-violet-100 text-violet-800 rounded-full text-[12px] font-medium">Tailwind CSS</span>
                <span class="px-3 py-1 bg-violet-100 text-violet-800 rounded-full text-[12px] font-medium">MariaDB</span>
              </div>
              <a href="https://www.hbblab.fr/" target="_blank" class="text-[#165dfc] font-semibold hover:underline">
                HBBlab →
              </a>
            </div>

            <!-- HBBlab Mobile Web App -->
            <div class="bg-white rounded-xl p-6 border border-gray-200 shadow-sm">
              <div class="flex items-center mb-3">
                <div class="w-3 h-3 bg-violet-500 rounded-full mr-3"></div>
                <h4 class="text-lg font-bold text-gray-900">App Web Mobile</h4>
              </div>
              <p class="text-gray-700 mb-3">Application web mobile pour les tests d'achat de bouquets TV depuis un smartphone.</p>
              <div class="flex flex-wrap gap-2 mb-3">
                <span class="px-3 py-1 bg-violet-100 text-violet-800 rounded-full text-[12px] font-medium">PHP</span>
                <span class="px-3 py-1 bg-violet-100 text-violet-800 rounded-full text-[12px] font-medium">JavaScript</span>
                <span class="px-3 py-1 bg-violet-100 text-violet-800 rounded-full text-[12px] font-medium">CSS</span>
              </div>
              <a href="https://www.hbblab.fr/" target="_blank" class="text-[#165dfc] font-semibold hover:underline">
                HBBlab →
              </a>
            </div>

            <!-- HBBlab TV Editor -->
            <div class="bg-white rounded-xl p-6 border border-gray-200 shadow-sm">
              <div class="flex items-center mb-3">
                <div class="w-3 h-3 bg-violet-500 rounded-full mr-3"></div>
                <h4 class="text-lg font-bold text-gray-900">Éditeur/Générateur de TV Apps</h4>
              </div>
              <p class="text-gray-700 mb-3">Interface de création et édition d'applications pour TV. Générations de fichiers XML.</p>
              <div class="flex flex-wrap gap-2 mb-3">
                <span class="px-3 py-1 bg-violet-100 text-violet-800 rounded-full text-[12px] font-medium">Laravel</span>
                <span class="px-3 py-1 bg-violet-100 text-violet-800 rounded-full text-[12px] font-medium">Vue.js</span>
                <span class="px-3 py-1 bg-violet-100 text-violet-800 rounded-full text-[12px] font-medium">Tailwind CSS</span>
                <span class="px-3 py-1 bg-violet-100 text-violet-800 rounded-full text-[12px] font-medium">XML</span>
              </div>
              <a href="https://www.hbblab.fr/" target="_blank" class="text-[#165dfc] font-semibold hover:underline">
                HBBlab →
              </a>
            </div>

            <!-- Fariz Electric -->
            <div class="bg-white rounded-xl p-6 border border-gray-200 shadow-sm">
              <div class="flex items-center mb-3">
                <div class="w-3 h-3 bg-violet-500 rounded-full mr-3"></div>
                <h4 class="text-lg font-bold text-gray-900">Site Vitrine</h4>
              </div>
              <p class="text-gray-700 mb-3">Site vitrine professionnel avec présentation des services, du fondateur et formulaire de contact.</p>
              <div class="flex flex-wrap gap-2 mb-3">
                <span class="px-3 py-1 bg-violet-100 text-violet-800 rounded-full text-[12px] font-medium">Laravel</span>
                <span class="px-3 py-1 bg-violet-100 text-violet-800 rounded-full text-[12px] font-medium">Inertia.js</span>
                <span class="px-3 py-1 bg-violet-100 text-violet-800 rounded-full text-[12px] font-medium">Tailwind CSS</span>
              </div>
              <a href="https://www.farizelectric.fr/" target="_blank" class="text-[#165dfc] font-semibold hover:underline">
                Fariz Electric →
              </a>
            </div>
          </div>
        </div>

        <div class="flex flex-col items-center space-y-2 text-xl mt-10 text-center">
          <span class="text-blue-600 font-bold">Une idée, un besoin, un projet à construire ou à améliorer ?</span>
          <span class="text-violet-600 font-bold">Écrivez-moi, je serai ravi d’en discuter avec vous !</span>

          <div class="mt-6 text-center">
            <Link href="/contact"
              class="inline-flex items-center px-6 py-3 bg-gradient-to-r from-violet-600 to-blue-600 text-white font-semibold rounded-lg hover:from-violet-700 hover:to-blue-700 transform hover:scale-105 transition-all duration-300">
            Discutons de votre projet
            <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
            </svg>
            </Link>
          </div>
        </div>
      </div>
    </section>
  </AppLayout>
</template>

<script setup>
import AppLayout from '@/Layouts/AppLayout.vue'
import { Link, Head } from '@inertiajs/vue3'
</script>
