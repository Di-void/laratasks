export default () => ({
    open: false,

    isOpen(initial) {
        if (!initial) return this.open;
        return initial;
    },

    openModal() {
        this.open = true;
    },

    closeModal() {
        this.open = false;
    },
});
