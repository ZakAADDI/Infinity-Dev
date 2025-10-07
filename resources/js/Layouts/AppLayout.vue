<template>
  <div class="min-h-screen bg-white flex flex-col">
    <!-- Navbar -->
    <nav class="bg-gradient-to-r from-violet-600 to-blue-600">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-center items-center h-20">
          <!-- Logo -->
          <!--<div class="flex-shrink-0">
            <div class="flex rows justify-center">
              <Link href="/" class="text-violet-600 text-2xl font-bold">
              <img src="/public/assets/images/logo-infinity-dev.png" alt="" class="h-10">
            </Link>
            <p>Infinity Dev</p>
            </div>
          </div> -->

          <!-- Navigation Links -->
          <div class="hidden md:block">
            <div class="flex items-baseline space-x-4">
              <Link href="/" class="px-3 py-2 rounded-md text-sm font-medium transition-colors" :class="{
                'bg-white text-violet-600': $page.url === '/',
                'text-white hover:bg-white hover:text-violet-600': $page.url !== '/'
              }">
              Accueil
              </Link>

              <Link href="/about" class="px-3 py-2 rounded-md text-sm font-medium transition-colors" :class="{
                'bg-white text-violet-600': $page.url === '/about',
                'text-white hover:bg-white hover:text-violet-600': $page.url !== '/about'
              }">
              À propos
              </Link>

              <Link href="/contact" class="px-3 py-2 rounded-md text-sm font-medium transition-colors" :class="{
                'bg-white text-violet-600': $page.url === '/contact',
                'text-white hover:bg-white hover:text-violet-600': $page.url !== '/contact'
              }">
              Contact
              </Link>
            </div>
          </div>

          <!-- Mobile menu button -->
          <div class="md:hidden">
            <button @click="mobileMenuOpen = !mobileMenuOpen" class="text-white p-2">
              <svg class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
              </svg>
            </button>
          </div>
        </div>
      </div>

      <!-- Mobile menu -->
      <div v-if="mobileMenuOpen" class="md:hidden">
        <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3 bg-gradient-to-r from-violet-500 to-blue-500">
          <Link href="/" class="text-white block px-3 py-2 rounded-md text-base font-medium"
            @click="mobileMenuOpen = false">
          Accueil
          </Link>
          <Link href="/about" class="text-white block px-3 py-2 rounded-md text-base font-medium"
            @click="mobileMenuOpen = false">
          À propos
          </Link>
          <Link href="/contact" class="text-white block px-3 py-2 rounded-md text-base font-medium"
            @click="mobileMenuOpen = false">
          Contact
          </Link>
        </div>
      </div>
    </nav>

    <!-- Main Content -->
    <main class="flex-1">
      <slot />
    </main>

    <!-- Footer -->
    <footer class="bg-gradient-to-r from-violet-600 to-blue-600">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-8 sm:py-10">
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 gap-6 sm:gap-8">
          <div class="text-center sm:text-left lg:col-span-1">
            <div class="flex flex-col items-center">
              <div class="flex">
                <img src="/public/assets/images/logo-infinity-dev.png" alt="Logo Infinity Dev" class="h-5"
                  loading="lazy">
              </div>
              <!-- Main Title -->
              <h1 class="text-4xl font-bold text-white leading-tight">
                Infinity Dev
              </h1>
              <!-- Slogan -->
              <p class="text-white text-[11px] leading-relaxed max-w-3xl mx-auto">
                <!-- Des solutions web & mobile sur mesure, adaptées à vos besoins. -->
                Lorsque les idées rencontrent l'infini
              </p>
            </div>
          </div>

          <div class="flex flex-col items-center sm:text-left lg:col-span-1">
            <h3 class="font-semibold text-white mb-2 text-lg">Liens</h3>
            <ul class="text-sm text-white space-y-1">
              <li>
                <Link href="/contact" class="text-white transition">Demander un
                devis</Link>
              </li>
              <li>
                <Link href="/legal-notice" class="text-white hover:text-[#539254] transition">
                Mentions légales</Link>
              </li>
            </ul>
          </div>
        </div>
      </div>
      <div class="text-center text-xs text-white pb-4">© {{ new Date().getFullYear() }} <a
          href="https://infinity-dev.dev" class="text-white font-bold">Infinity Dev</a>. Tous droits
        réservés.
      </div>
    </footer>

  </div>
</template>

<script setup>
import { ref } from 'vue'
import { Link, usePage } from '@inertiajs/vue3'

const mobileMenuOpen = ref(false)
const $page = usePage()
</script>