<template>
  <AppLayout>

    <Head title="Contact — Infinity Dev" :meta="[
      { name: 'description', content: 'Contactez Infinity Dev pour discuter de votre projet.' },
      { property: 'og:title', content: 'Contact — Infinity Dev' },
      { property: 'og:description', content: 'Contactez Infinity Dev pour discuter de votre projet.' },
      { property: 'og:type', content: 'website' }
    ]" :link="[
        { rel: 'canonical', href: 'https://infinity-dev.dev/contact' }
      ]" />
    <!-- Hero Section -->
    <section class="bg-gradient-to-r from-violet-600 to-blue-600 py-10">
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <div class="flex justify-center">
          <img src="/public/assets/images/logo-infinity-dev.png" alt="Logo Infinity Dev" class="h-10" loading="lazy">
        </div>
        <h1 class="text-5xl mt-2 md:text-6xl font-bold text-white mb-6">
          Contactez-nous
        </h1>
        <p class="text-xl text-violet-100 max-w-3xl mx-auto">
          Vous avez un projet, une idée ou besoin d'un devis ?<br>
          N'hésitez pas à nous contacter via le formulaire ci-dessous.
        </p>
      </div>
    </section>

    <!-- Contact Form Section -->
    <section class="py-10">
      <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Success Message -->
        <div v-if="showSuccess" class="bg-green-50 border border-green-200 rounded-2xl p-6 mb-8">
          <div class="flex items-center">
            <div class="flex-shrink-0">
              <svg class="h-6 w-6 text-green-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
            </div>
            <div class="ml-3">
              <p class="text-lg font-medium text-green-800">
                Merci, votre message a bien été envoyé !
              </p>
              <p class="text-green-700 mt-1">
                Je vous répondrai dans les plus brefs délais.
              </p>
            </div>
          </div>
        </div>

        <!-- Contact Form -->
        <div class="bg-white rounded-2xl shadow-xl p-8">
          <form @submit.prevent="submitForm" class="space-y-6">
            <!-- Name Field -->
            <div>
              <label for="name" class="block text-sm font-medium text-gray-700 mb-2">
                Nom <span class="text-red-500">*</span>
              </label>
              <input id="name" v-model="form.name" type="text" required
                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-violet-500 focus:border-violet-500 transition-colors"
                :class="{ 'border-red-500': errors.name }" placeholder="Votre nom complet" />
              <p v-if="errors.name" class="mt-1 text-sm text-red-600">{{ errors.name }}</p>
            </div>

            <!-- Email Field -->
            <div>
              <label for="email" class="block text-sm font-medium text-gray-700 mb-2">
                Email <span class="text-red-500">*</span>
              </label>
              <input id="email" v-model="form.email" type="email" required
                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-violet-500 focus:border-violet-500 transition-colors"
                :class="{ 'border-red-500': errors.email }" placeholder="votre.email@exemple.com" />
              <p v-if="errors.email" class="mt-1 text-sm text-red-600">{{ errors.email }}</p>
            </div>

            <!-- Subject Field -->
            <div>
              <label for="subject" class="block text-sm font-medium text-gray-700 mb-2">
                Objet
              </label>
              <input id="subject" v-model="form.subject" type="text"
                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-violet-500 focus:border-violet-500 transition-colors"
                placeholder="Sujet de votre message" />
            </div>

            <!-- Message Field -->
            <div>
              <label for="message" class="block text-sm font-medium text-gray-700 mb-2">
                Message <span class="text-red-500">*</span>
              </label>
              <textarea id="message" v-model="form.message" rows="6" required
                class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-violet-500 focus:border-violet-500 transition-colors resize-none"
                :class="{ 'border-red-500': errors.message }"
                placeholder="Décrivez votre projet ou votre demande..."></textarea>
              <p v-if="errors.message" class="mt-1 text-sm text-red-600">{{ errors.message }}</p>
            </div>

            <!-- Submit Button -->
            <div class="flex justify-center">
              <button type="submit" :disabled="isSubmitting"
                class="inline-flex items-center px-8 py-4 bg-gradient-to-r from-violet-600 to-blue-600 text-white font-bold text-lg rounded-lg hover:from-violet-700 hover:to-blue-700 transform hover:scale-105 transition-all duration-300 disabled:opacity-50 disabled:cursor-not-allowed disabled:transform-none">
                <svg v-if="isSubmitting" class="animate-spin -ml-1 mr-3 h-5 w-5 text-white"
                  xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                  <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                  <path class="opacity-75" fill="currentColor"
                    d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z">
                  </path>
                </svg>
                <span v-if="!isSubmitting">Envoyer le message</span>
                <span v-else>Envoi en cours...</span>
              </button>
            </div>
          </form>
        </div>

        <!-- Contact Info -->
        <div class="flex justify-center space-x-15 mt-10">
          <!-- Response Time -->
          <div class="text-center">
            <div
              class="w-16 h-16 bg-gradient-to-r from-violet-500 to-blue-500 rounded-2xl mx-auto mb-4 flex items-center justify-center">
              <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
              </svg>
            </div>
            <h3 class="text-lg font-semibold text-gray-900 mb-2">Réponse</h3>
            <p class="text-gray-600">Sous 48h</p>
          </div>

          <!-- Location -->
          <div class="text-center">
            <div
              class="w-16 h-16 bg-gradient-to-r from-violet-500 to-blue-500 rounded-2xl mx-auto mb-4 flex items-center justify-center">
              <svg class="w-8 h-8 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
              </svg>
            </div>
            <h3 class="text-lg font-semibold text-gray-900 mb-2">Localisation</h3>
            <p class="text-gray-600">France</p>
          </div>
        </div>
      </div>
    </section>
  </AppLayout>
</template>

<script setup>
import { ref, reactive } from 'vue'
import { useForm, Head } from '@inertiajs/vue3'
import AppLayout from '@/Layouts/AppLayout.vue'

const showSuccess = ref(false)
const isSubmitting = ref(false)

const form = useForm({
  name: '',
  email: '',
  subject: '',
  message: ''
})

const errors = reactive({
  name: '',
  email: '',
  message: ''
})

const submitForm = async () => {
  // Reset errors
  Object.keys(errors).forEach(key => errors[key] = '')

  // Basic validation
  let hasErrors = false

  if (!form.name.trim()) {
    errors.name = 'Le nom est requis'
    hasErrors = true
  }

  if (!form.email.trim()) {
    errors.email = 'L\'email est requis'
    hasErrors = true
  } else if (!/^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(form.email)) {
    errors.email = 'L\'email n\'est pas valide'
    hasErrors = true
  }

  if (!form.message.trim()) {
    errors.message = 'Le message est requis'
    hasErrors = true
  }

  if (hasErrors) return

  isSubmitting.value = true

  try {
    await form.post('/contact', {
      onSuccess: () => {
        showSuccess.value = true
        form.reset()
        // Hide success message after 5 seconds
        setTimeout(() => {
          showSuccess.value = false
        }, 5000)
      },
      onError: (errors) => {
        // Handle server-side errors if any
        console.error('Form submission errors:', errors)
      }
    })
  } catch (error) {
    console.error('Form submission error:', error)
  } finally {
    isSubmitting.value = false
  }
}
</script>
