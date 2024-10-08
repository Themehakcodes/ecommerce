<template>
    <div>
        <h2>Register</h2>
        <form @submit.prevent="register">
            <input type="text" v-model="name" placeholder="Name" required />
            <input type="email" v-model="email" placeholder="Email" required />
            <input type="password" v-model="password" placeholder="Password" required />
            <button type="submit">Register</button>
        </form>
    </div>
</template>

<script>
import axios from 'axios';

export default {
    data() {
        return {
            name: '',
            email: '',
            password: '',
        };
    },
    methods: {
        async register() {
            try {
                await axios.post('/api/register', {
                    name: this.name,
                    email: this.email,
                    password: this.password,
                });
                alert('Registration successful!');
                this.$router.push('/login'); // Redirect to login page
            } catch (error) {
                console.error(error);
                alert('Registration failed. Please try again.');
            }
        },
    },
};
</script>
