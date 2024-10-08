<template>
    <div>
        <h1>Welcome to the E-commerce App</h1>
        <button @click="logout">Logout</button>
    </div>
</template>

<script>
import axios from 'axios';

export default {
    methods: {
        async logout() {
            try {
                await axios.post('/api/logout');
                localStorage.removeItem('token'); // Remove token on logout
                alert('Logged out successfully!');
                this.$router.push('/login'); // Redirect to login page
            } catch (error) {
                console.error(error);
                alert('Logout failed. Please try again.');
            }
        },
    },
};
</script>
