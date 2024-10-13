import './bootstrap';
import { createApp, h } from 'vue';
import { createInertiaApp } from '@inertiajs/inertia-vue3';
import { InertiaProgress } from '@inertiajs/progress';

// Fungsi untuk mengimpor komponen
const importPage = async (name) => {
    const page = await import(`./Pages/${name}.vue`);
    return page.default;
};

createInertiaApp({
    resolve: importPage,
    setup({ el, App, props, plugin }) {
        createApp({ render: () => h(App, props) })
            .use(plugin)
            .mount(el);
    },
});


InertiaProgress.init({ color: '#4B5563' });
