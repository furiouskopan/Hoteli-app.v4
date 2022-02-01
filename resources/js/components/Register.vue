<template>
    <div>
        <p>{{componentVar}}</p>
    </div>
</template>
<script>
export default {
     data() {
      return {
        componentVar: '1234'
      }
    },
}
</script>
<style lang="scss" scoped>
    p{
        font-size: 200px;
    }
</style>