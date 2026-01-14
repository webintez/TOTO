import './bootstrap';
import 'swiper/css';
import 'swiper/css/navigation';
import 'swiper/css/pagination';

// import { Swiper, SwiperSlide } from 'swiper/vue'; // If using Vue, but we are using Blade/Alpine
import Swiper from 'swiper';
import { Navigation, Pagination, Autoplay } from 'swiper/modules';

// Configure Swiper
Swiper.use([Navigation, Pagination, Autoplay]);

window.Swiper = Swiper;
