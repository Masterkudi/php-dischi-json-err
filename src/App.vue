<script>
import TheHeader from "./components/TheHeader.vue";
import TheFooter from "./components/TheFooter.vue";
import AlbumList from "./components/AlbumList.vue";

export default {
  components: {
    TheHeader,
    TheFooter,
    AlbumList
  }
}
</script>

<template>
  <TheHeader></TheHeader>
  <main>
    <AlbumList></AlbumList>
  </main>
  <TheFooter></TheFooter>
</template>

<style lang="scss">
</style>
