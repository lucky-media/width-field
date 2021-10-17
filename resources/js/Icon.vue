<template>
    <svg v-if="name === 'full'" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 32 20"><path d="M0 0h32v20H0z"/></svg>
    <svg v-else-if="name === 'half'" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 32 20"><path d="M0 0h14v20H0V0Z"/><path fill-rule="evenodd" d="M30.5 1.5h-11v17h11v-17ZM18 0v20h14V0H18Z" clip-rule="evenodd"/></svg>
    <svg v-else-if="name === 'one-third'" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 32 20"><path d="M0 0h9v20H0V0Z"/><path fill-rule="evenodd" d="M18.5 1.5h-5v17h5v-17ZM12 0v20h8V0h-8ZM30.5 1.5h-6v17h6v-17ZM23 0v20h9V0h-9Z" clip-rule="evenodd"/></svg>
    <svg v-else-if="name === 'two-thirds'" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 32 20"><path d="M0 0h20v20H0V0Z"/><path fill-rule="evenodd" d="M30.5 1.5h-6v17h6v-17ZM23 0v20h9V0h-9Z" clip-rule="evenodd"/></svg>
    <svg v-else-if="name === 'one-quarter'" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 32 20"><path d="M0 0h5v20H0V0Z"/><path fill-rule="evenodd" d="M12.5 1.5h-3v17h3v-17ZM8 0v20h6V0H8ZM21.5 1.5h-3v17h3v-17ZM17 0v20h6V0h-6ZM30.5 1.5h-3v17h3v-17ZM26 0v20h6V0h-6Z" clip-rule="evenodd"/></svg>
    <svg v-else-if="name === 'three-quarters'" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 32 20"><path d="M0 0h23v20H0V0Z"/><path fill-rule="evenodd" d="M30.5 1.5h-3v17h3v-17ZM26 0v20h6V0h-6Z" clip-rule="evenodd"/></svg>
</template>

<script>
export default {
  props: {
    name: String,
  },
}
</script>
