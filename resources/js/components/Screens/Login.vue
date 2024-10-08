<template>
    <div class="flex flex-col items-center justify-center min-h-screen bg-gray-100">
      <div class="bg-white shadow-lg rounded-lg p-8 w-96 transition-transform transform hover:scale-105">
        <h2 class="text-3xl font-bold text-center mb-6 text-blue-600">Login</h2>
        <form @submit.prevent="login">
          <div class="relative mb-4">
            <input
              type="email"
              v-model="email"
              placeholder="Email"
              required
              class="border border-gray-300 p-3 rounded w-full pl-10 transition duration-200 focus:border-blue-500 focus:ring focus:ring-blue-200"
            />
            <svg
              class="absolute left-3 top-3 w-5 h-5 text-gray-400"
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
          <div class="relative mb-6">
            <input
              type="password"
              v-model="password"
              placeholder="Password"
              required
              class="border border-gray-300 p-3 rounded w-full pl-10 transition duration-200 focus:border-blue-500 focus:ring focus:ring-blue-200"
            />
            <svg
              class="absolute left-3 top-3 w-5 h-5 text-gray-400"
              xmlns="http://www.w3.org/2000/svg"
              fill="none"
              viewBox="0 0 24 24"
              stroke-width="2"
              stroke="currentColor"
              aria-hidden="true"
            >
              <path stroke-linecap="round" stroke-linejoin="round" d="M15 12H9m6 0h2m-2 4H9m6-4v4m0-4v-4m0 0H9m6 0H9m0 0V4m0 8v4" />
            </svg>
          </div>
          <button
            type="submit"
            class="bg-blue-600 text-white p-3 rounded w-full hover:bg-blue-700 transition duration-200"
          >
            Login
          </button>
        </form>
        <div class="my-4 text-center">
          <span class="text-gray-600">or</span>
        </div>
        <button
          @click="loginWithGoogle"
          class="bg-red-600 text-white p-3 rounded w-full hover:bg-red-700 transition duration-200"
        >
          Login with Google
        </button>
        <p class="mt-6 text-center text-gray-700">
          Don't have an account? 
          <router-link to="/register" class="text-blue-600 hover:underline">Create a new account</router-link>
        </p>
      </div>
    </div>
  </template>
  
  <script>
  import axios from 'axios';
  
  export default {
    data() {
      return {
        email: '',
        password: '',
      };
    },
    methods: {
      async login() {
        try {
          const response = await axios.post('/api/login', {
            email: this.email,
            password: this.password,
          });
          localStorage.setItem('token', response.data.token); // Save token
          alert('Login successful!');
          this.$router.push('/'); // Redirect to home page
        } catch (error) {
          console.error(error);
          alert('Login failed. Please check your credentials.');
        }
      },
      async loginWithGoogle() {
        // Implement Google login logic here
        alert('Login with Google functionality is not implemented yet.');
      },
    },
  };
  </script>
  
  <style scoped>
  /* Add any additional styles if needed */
  </style>
  