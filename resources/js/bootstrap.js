import axios from 'axios';
import AlpineJs from 'alpinejs';
window.axios = axios;

window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest';

window.Alpine = AlpineJs;
AlpineJs.start();
