import '../css/app.css';

import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/vue3';
import { InertiaProgress } from '@inertiajs/progress'
import { resolvePageComponent } from 'laravel-vite-plugin/inertia-helpers';
import MainLayout from './Layouts/MainLayout.vue';
import { ZiggyVue } from '../../vendor/tightenco/ziggy/dist/vue.m';

const appName = import.meta.env.VITE_APP_NAME || 'Laravel';

InertiaProgress.init({
    delay: 0,
    color: '#29d',
    includeCSS: true,
    showSpinner: true,
  })
  
  createInertiaApp({
    resolve: async (name) => {
      const pages = import.meta.glob('./Pages/**/*.vue')
  
      const page = await pages[`./Pages/${name}.vue`]()
      page.default.layout = page.default.layout || MainLayout
  
      return page
    },
    // function () {}
    // {el: xxx, App: xxx, props: xxx}
    setup({ el, App, props, plugin }) {
      createApp({ render: () => h(App, props) })
        .use(plugin)
        .use(ZiggyVue)
        .mount(el)
    },
  })
