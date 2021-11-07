module.exports = [
    {
        path: "/home",
        name: "home",
        component: () => import("./Components/Home/Home.vue")
    },
    {
        path: "/",
        name: "products.index",
        component: () => import("./Components/Products/Index.vue")
    },
    {
        path: "/product/:slug",
        name: "products.show",
        component: () => import("./Components/Products/Show.vue")
    },
    {
        path: "/checkout",
        name: "order.checkout",
        component: () => import("./Components/Order/Checkout.vue")
    },
    {
        path: "/summary",
        name: "order.summary",
        component: () => import("./Components/Order/Summary.vue")
    }
];
