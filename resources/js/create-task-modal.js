export default () => ({
    open: false,

    openModal() {
        this.open = true;
    },

    closeModal() {
        this.open = false;
    },
});
