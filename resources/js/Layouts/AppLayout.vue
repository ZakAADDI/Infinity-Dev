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
              <Link 
                href="/" 
                class="px-3 py-2 rounded-md text-sm font-medium transition-colors"
                :class="{
                  'bg-white text-violet-600': $page.url === '/',
                  'text-white hover:bg-white hover:text-violet-600': $page.url !== '/'
                }"
              >
                Accueil
              </Link>

              <Link 
                href="/about" 
                class="px-3 py-2 rounded-md text-sm font-medium transition-colors"
                :class="{
                  'bg-white text-violet-600': $page.url === '/about',
                  'text-white hover:bg-white hover:text-violet-600': $page.url !== '/about'
                }"
              >
                À propos
              </Link>

              <Link 
                href="/contact" 
                class="px-3 py-2 rounded-md text-sm font-medium transition-colors"
                :class="{
                  'bg-white text-violet-600': $page.url === '/contact',
                  'text-white hover:bg-white hover:text-violet-600': $page.url !== '/contact'
                }"
              >
                Contact
              </Link>
            </div>
          </div>

          <!-- Mobile menu button -->
          <div class="md:hidden">
            <button 
              @click="mobileMenuOpen = !mobileMenuOpen"
              class="text-white p-2"
            >
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
          <Link 
            href="/" 
            class="text-white block px-3 py-2 rounded-md text-base font-medium"
            @click="mobileMenuOpen = false"
          >
            Accueil
          </Link>
          <Link 
            href="/about" 
            class="text-white block px-3 py-2 rounded-md text-base font-medium"
            @click="mobileMenuOpen = false"
          >
            À propos
          </Link>
          <Link 
            href="/contact" 
            class="text-white block px-3 py-2 rounded-md text-base font-medium"
            @click="mobileMenuOpen = false"
          >
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
    <footer class="bg-gradient-to-r from-violet-800 to-blue-800 text-white">
      <div class="max-w-7xl mx-auto py-8 px-4 sm:px-6 lg:px-8">
        <div class="flex flex-col items-center gap-4 sm:gap-5 md:flex-row md:justify-between">
          <!-- Left: social/logo -->
          <div class="flex items-center justify-center">
            <a 
              href="https://www.linkedin.com/company/infinity-dev-company" 
              target="_blank" 
              rel="noopener noreferrer"
              class="text-white hover:text-violet-200 transition-colors"
              aria-label="Infinity Dev sur LinkedIn"
            >
              <svg class="h-8 w-8" fill="currentColor" viewBox="0 0 24 24" aria-hidden="true">
                <path d="M20.447 20.452h-3.554v-5.569c0-1.328-.027-3.047-1.852-3.047-1.853 0-2.136 1.445-2.136 2.939v5.677H9.351V9h3.414v1.561h.046c.477-.9 1.637-1.85 3.37-1.85 3.601 0 4.267 2.37 4.267 5.455v6.286zM5.337 7.433c-1.144 0-2.063-.926-2.063-2.065 0-1.138.92-2.063 2.063-2.063 1.14 0 2.064.925 2.064 2.063 0 1.139-.925 2.065-2.064 2.065zm1.782 13.019H3.555V9h3.564v11.452zM22.225 0H1.771C.792 0 0 .774 0 1.729v20.542C0 23.227.792 24 1.771 24h20.451C23.2 24 24 23.227 24 22.271V1.729C24 .774 23.2 0 22.222 0h.003z"/>
              </svg>
            </a>
          </div>

          <!-- Center: copyright -->
          <p class="text-sm text-center">© 2025 Infinity Dev - Tous droits réservés</p>

          <!-- Right: links -->
          <div class="flex items-center justify-center gap-4 text-xs">
            <Link href="/legal-notice" class="underline hover:text-violet-200">Mentions Légales</Link>
            <span class="hidden sm:inline">·</span>
            <Link href="/contact" class="underline hover:text-violet-200">Contact</Link>
          </div>
        </div>
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
