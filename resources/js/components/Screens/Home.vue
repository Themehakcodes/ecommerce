<template>
    <div class="flex flex-col items-center justify-center min-h-screen bg-gray-100">
      <div class="bg-white shadow-lg rounded-lg p-10 w-96 text-center transition-transform transform hover:scale-105">
        <h1 class="text-4xl font-bold text-blue-600 mb-4">Welcome to the E-commerce App</h1>
        <p class="text-gray-700 mb-6">
          Your one-stop shop for all your favorite products. Enjoy shopping with us!
        </p>
        <router-link to="/login">
          <button class="bg-blue-600 text-white p-3 rounded w-full hover:bg-blue-700 transition duration-200">
            Start Shopping
          </button>
        </router-link>
        <div class="mt-6 flex justify-center">
          <svg
            class="w-10 h-10 text-blue-600"
            xmlns="http://www.w3.org/2000/svg"
            fill="none"
            viewBox="0 0 24 24"
            stroke-width="2"
            stroke="currentColor"
            aria-hidden="true"
          >
            <path stroke-linecap="round" stroke-linejoin="round" d="M16 12H8m8 0H8m8 0v4m0-4V8m0 0H8m8 0H8m0 0V4m0 8v4" />
          </svg>
        </div>
      </div>
    </div>
  </template>
  
  <script>
  import axios from 'axios';
  
  export default {
    methods: {
      // You can add methods related to fetching data or any other functionality here.
    },
  };
  </script>
  
  <style scoped>
  /* Add any additional styles if needed */
  </style>
  