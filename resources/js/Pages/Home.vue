<template>
  <AppLayout>
    <Head title="Accueil — Infinity Dev"
      :meta="[
        { name: 'description', content: 'Développement web et mobile sur mesure, performance et design.' },
        { property: 'og:title', content: 'Accueil — Infinity Dev' },
        { property: 'og:description', content: 'Développement web et mobile sur mesure, performance et design.' },
        { property: 'og:type', content: 'website' }
      ]"
      :link="[
        { rel: 'canonical', href: 'https://infinity-dev.dev/' }
      ]"
    />
    <!-- Hero Section -->
    <section class="relative bg-gradient-to-r from-violet-600 to-blue-600 flex items-center justify-center overflow-hidden">
      <!-- Background Pattern -->
      <div class="absolute inset-0 opacity-10">
        <div class="absolute top-20 left-20 w-72 h-72 bg-white rounded-full mix-blend-multiply filter blur-xl animate-pulse"></div>
        <div class="absolute top-40 right-20 w-72 h-72 bg-violet-300 rounded-full mix-blend-multiply filter blur-xl animate-pulse animation-delay-2000"></div>
        <div class="absolute -bottom-8 left-40 w-72 h-72 bg-blue-300 rounded-full mix-blend-multiply filter blur-xl animate-pulse animation-delay-4000"></div>
      </div>
      
      <div class="relative z-10 text-center px-4 sm:px-6 lg:px-8 mx-auto">
        <div class="my-10">
          <div class="flex justify-center">
            <img src="/public/assets/images/logo-infinity-dev.png" alt="Logo Infinity Dev" class="h-10" loading="lazy">
          </div>
            <!-- Main Title -->
          <h1 class="text-5xl md:text-7xl font-bold text-white leading-tight">
            Infinity Dev
          </h1>
          <!-- Slogan -->
          <p class="text-xl md:text-2xl text-violet-100 mb-8 leading-relaxed max-w-3xl mx-auto">
            <!-- Des solutions web & mobile sur mesure, adaptées à vos besoins. -->
            Lorsque les idées rencontrent l'infini
          </p>
        </div>
        
        <!-- Description -->
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-3 gap-4 md:gap-6">
          <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-6 md:p-8 border border-white/20">
            <div class="flex justify-center items-center mb-4">
              <svg class="w-8 h-8 text-violet-300 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
              </svg>
              <h3 class="text-xl font-semibold text-white">Développement</h3>
            </div>
            <p class="text-base md:text-lg lg:text-xl text-white leading-relaxed mb-6">
              Chez Infinity Dev, on conçoit et développe des applications web et mobiles modernes, efficaces et sur mesure.
            </p>
          </div>
          <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-6 md:p-8 border border-white/20">
            <div class="flex justify-center items-center mb-4">
              <svg class="w-8 h-8 text-blue-300 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" />
              </svg>
              <h3 class="text-xl font-semibold text-white">Technologies</h3>
            </div>
            <p class="text-base md:text-lg lg:text-xl text-white leading-relaxed mb-6">
              Des technologies fiables comme Laravel et Vue.js, pour des solutions pensées pour l'utilisateur.
            </p>
          </div>
          <div class="bg-white/10 backdrop-blur-sm rounded-2xl p-6 md:p-8 border border-white/20">
            <div class="flex justify-center items-center mb-4">
              <svg class="w-8 h-8 text-green-300 mr-3" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z" />
              </svg>
              <h3 class="text-xl font-semibold text-white">Collaboration</h3>
            </div>
            <p class="text-base md:text-lg lg:text-xl text-white leading-relaxed mb-6">
              Au-delà du code et de la prestation, l'écoute, la transparence et l'humain sont au cœur de la démarche.
            </p>
          </div>
        </div>
        
        <!-- CTA Button -->
        <Link 
          href="/contact"
          class="inline-flex items-center px-8 py-4 bg-white text-violet-600 font-bold text-lg rounded-full shadow-lg hover:bg-violet-50 transform hover:scale-105 transition-all duration-300 hover:shadow-xl my-10"
        >
          Me contacter
          <svg class="ml-2 w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 7l5 5m0 0l-5 5m5-5H6" />
          </svg>
        </Link>
      </div>
    </section>
    
    <!-- Features Section -->
    <section class="py-20 bg-gray-50">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-16">
          <h2 class="text-4xl font-bold text-gray-900 mb-4">Pourquoi choisir Infinity Dev ?</h2>
          <p class="text-xl text-gray-600 max-w-3xl mx-auto">
            Une approche moderne et professionnelle pour vos projets digitaux
          </p>
        </div>
        
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
          <!-- Feature 1 -->
          <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-shadow duration-300">
            <div class="w-16 h-16 bg-gradient-to-r from-violet-500 to-blue-500 rounded-2xl flex items-center justify-center mb-6">
              <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
              </svg>
            </div>
            <h3 class="text-2xl font-bold text-gray-900 mb-4">Performance</h3>
            <p class="text-gray-600">Applications optimisées pour une expérience utilisateur fluide et rapide.</p>
          </div>
          
          <!-- Feature 2 -->
          <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-shadow duration-300">
            <div class="w-16 h-16 bg-gradient-to-r from-violet-500 to-blue-500 rounded-2xl flex items-center justify-center mb-6">
              <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4.318 6.318a4.5 4.5 0 000 6.364L12 20.364l7.682-7.682a4.5 4.5 0 00-6.364-6.364L12 7.636l-1.318-1.318a4.5 4.5 0 00-6.364 0z" />
              </svg>
            </div>
            <h3 class="text-2xl font-bold text-gray-900 mb-4">Design Moderne</h3>
            <p class="text-gray-600">Interfaces élégantes et intuitives qui captent l'attention de vos utilisateurs.</p>
          </div>
          
          <!-- Feature 3 -->
          <div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-xl transition-shadow duration-300">
            <div class="w-16 h-16 bg-gradient-to-r from-violet-500 to-blue-500 rounded-2xl flex items-center justify-center mb-6">
              <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
              </svg>
            </div>
            <h3 class="text-2xl font-bold text-gray-900 mb-4">Sécurité</h3>
            <p class="text-gray-600">Applications sécurisées et conformes aux standard.</p>
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

<style scoped>
.animation-delay-2000 {
  animation-delay: 2s;
}

.animation-delay-4000 {
  animation-delay: 4s;
}
</style>
