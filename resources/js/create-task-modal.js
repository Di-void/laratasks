export default () => ({
    open: false,

    modalName: "",

    openModal(name) {
        this.modalName = name;
    },

    closeModal() {
        this.modalName = "";
    },
});
