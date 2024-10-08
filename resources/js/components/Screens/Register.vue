<template>
    <div class="flex flex-col items-center justify-center min-h-screen bg-gray-100">
      <div class="bg-white shadow-md rounded-lg p-8 w-96">
        <h2 class="text-2xl font-bold text-center mb-6">{{ step === 1 ? 'Sign Up' : 'Address Details' }}</h2>
  
        <form @submit.prevent="step === 1 ? register() : saveAddress()">
          <div v-if="step === 1">
            <input
              type="text"
              v-model="name"
              placeholder="Full Name"
              required
              class="border border-gray-300 p-2 rounded w-full mb-4"
            />
            <input
              type="email"
              v-model="email"
              placeholder="Email"
              required
              class="border border-gray-300 p-2 rounded w-full mb-4"
            />
            <input
              type="password"
              v-model="password"
              placeholder="Password"
              required
              class="border border-gray-300 p-2 rounded w-full mb-4"
            />
            <input
              type="password"
              v-model="confirmPassword"
              placeholder="Confirm Password"
              required
              class="border border-gray-300 p-2 rounded w-full mb-4"
            />
          </div>
  
          <div v-if="step === 2">
            <input
              type="text"
              v-model="address"
              placeholder="Address"
              required
              class="border border-gray-300 p-2 rounded w-full mb-4"
            />
            <input
              type="text"
              v-model="city"
              placeholder="City"
              required
              class="border border-gray-300 p-2 rounded w-full mb-4"
            />
            <input
              type="text"
              v-model="country"
              placeholder="Country"
              required
              class="border border-gray-300 p-2 rounded w-full mb-4"
            />
            <input
              type="text"
              v-model="pincode"
              placeholder="Pincode"
              required
              class="border border-gray-300 p-2 rounded w-full mb-4"
            />
          </div>
  
          <button
            type="submit"
            class="bg-blue-500 text-white p-2 rounded w-full hover:bg-blue-600 transition duration-200"
          >
            {{ step === 1 ? 'Register' : 'Save Address' }}
          </button>
        </form>
  
        <p class="mt-6 text-center">
          Already have an account?
          <router-link to="/login" class="text-blue-500 hover:underline">Login</router-link>
        </p>
      </div>
    </div>
  </template>
  
  <script>
  import axios from 'axios';
  
  export default {
    data() {
      return {
        step: 1, // Step of the registration process
        name: '',
        email: '',
        password: '',
        confirmPassword: '',
        address: '',
        city: '',
        country: '',
        pincode: '',
      };
    },
    methods: {
      async register() {
        // Validate password match
        if (this.password !== this.confirmPassword) {
          alert("Passwords don't match.");
          return;
        }
  
        try {
          await axios.post('/api/register', {
            name: this.name,
            email: this.email,
            password: this.password,
          });
          this.step = 2; // Move to address details step
        } catch (error) {
          console.error(error);
          alert('Registration failed. Please try again.');
        }
      },
      async saveAddress() {
        try {
          // Save address details to the backend
          await axios.post('/api/save-address', {
            email: this.email,
            address: this.address,
            city: this.city,
            country: this.country,
            pincode: this.pincode,
          });
          alert('Registration successful!'); // Notify user
          this.$router.push('/login'); // Redirect to login page
        } catch (error) {
          console.error(error);
          alert('Failed to save address. Please try again.');
        }
      },
    },
  };
  </script>
  
  <style scoped>
  /* Add any additional styles if needed */
  </style>
  