<template>
  <div class="promotions-container">
    <h1 class="promotions-title">Promotions</h1>

    <div class="carousel-wrapper">
      <div class="carousel-container">
        <div class="carousel">
          <transition-group name="fade" tag="div">
            <div v-for="(promotion, index) in promotions" :key="promotion.title" v-show="index === activeIndex" class="carousel-item">
              <div class="image-container">
                <img :src="promotion.imageUrl" :alt="promotion.title" class="carousel-image">
              </div>
              <div class="carousel-caption">
                <h3>{{ promotion.title }}</h3>
                <p>{{ promotion.caption }}</p>
              </div>
            </div>
          </transition-group>
        </div>
        <button @click="prevSlide" class="carousel-control prev">&lt;</button>
        <button @click="nextSlide" class="carousel-control next">&gt;</button>
      </div>
    </div>

    <!-- Tombol kembali ke dashboard -->
    <div class="back-button-container">
      <button @click="goToDashboard" class="back-button">Kembali ke Dashboard</button>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      promotions: [
        {
          imageUrl: 'img/KyotoMsite.jpg',
          title: 'Your Next Des-TEA-nation',
          caption: 'Experience our new tea creations!',
        },
        {
          imageUrl: 'img/CroffleMsite.jpg',
          title: 'The Croffle',
          caption: 'Enjoy our delicious Croffle Box for only Rp 180.000!',
        },
        {
          imageUrl: 'img/msitemtix.jpg',
          title: 'M-TIX MAKIN ASIK!',
          caption: 'Update aplikasi m.tix kamu ke versi TERBARU sekarang juga!',
        },
      ],
      activeIndex: 0,
      timer: null,
    };
  },
  mounted() {
    this.startTimer();
  },
  beforeUnmount() {
    this.stopTimer();
  },
  methods: {
    startTimer() {
      this.timer = setInterval(this.nextSlide, 5000);
    },
    stopTimer() {
      clearInterval(this.timer);
    },
    nextSlide() {
      this.activeIndex = (this.activeIndex + 1) % this.promotions.length;
    },
    prevSlide() {
      this.activeIndex = (this.activeIndex - 1 + this.promotions.length) % this.promotions.length;
    },
    goToDashboard() {
      window.location.href = '/'; // Ganti dengan URL dashboard yang sesuai
    },
  },
};
</script>

<style scoped>
.promotions-container {
  max-width: 100%;
  margin: 0 auto;
  padding: 0px;
}

.promotions-title {
  text-align: center;
  margin-bottom: -60px;
  font-size: 2.5rem;
  color: #007bff;
}

.carousel-wrapper {
  width: 100%;
  height: 84vh;
  overflow: hidden;
}

.carousel-container {
  position: relative;
  width: 100%;
  height: 100%;
  border-radius: 10px;
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
}

.carousel {
  width: 100%;
  height: 100%;
  position: relative;
}

.carousel-item {
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
}

.image-container {
  width: 100%;
  height: 100%;
  display: flex;
  justify-content: center;
  align-items: center;
  overflow: hidden;
}

.carousel-image {
  width: 100%;
  height: 100%;
  object-fit: contain;
  object-position: center;
}

.carousel-caption {
  position: absolute;
  bottom: 0px;
  left: 0;
  right: 0;
  background: rgba(0, 0, 0, 0.5);
  color: white;
  padding: 15px;
  text-align: center;
}

.carousel-control {
  position: absolute;
  top: 50%;
  transform: translateY(-50%);
  background: rgba(0, 0, 0, 0.5);
  color: white;
  border: none;
  padding: 10px 15px;
  font-size: 18px;
  cursor: pointer;
  transition: background 0.3s;
  z-index: 10;
}

.carousel-control:hover {
  background: rgba(0, 0, 0, 0.8);
}

.prev {
  left: 10px;
}

.next {
  right: 10px;
}

.fade-enter-active, .fade-leave-active {
  transition: opacity 0.5s;
}

.fade-enter, .fade-leave-to {
  opacity: 0;
}

/* Styling untuk tombol kembali */
.back-button-container {
  text-align: center;
  margin-top: 20px;
}

.back-button {
  background-color: #007bff;
  color: white;
  border: none;
  padding: 10px 20px;
  font-size: 16px;
  border-radius: 5px;
  cursor: pointer;
  transition: background 0.3s;
}

.back-button:hover {
  background-color: #0056b3;
}
</style>
