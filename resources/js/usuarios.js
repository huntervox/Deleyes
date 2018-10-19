import "./bootstrap";
import Vue from "vue";
import { Pagination, Modal } from "uiv";
import Validate from "./Validate";
import VeeValidate, { Validator } from "vee-validate";

Vue.use(Validate);
new Vue({
    el: "#app",
    components: { Modal },
    data() {
        return {
            usuarios: [],
            deleteUser: {},
            modal: false,
            deleteModal: false
        };
    },
    created() {
        axios.get("/api/usuarios").then(response => {
            this.usuarios = this.paginator.data = response.data;
        });
    },
    methods: {
        openDeleteModal(user) {
            this.deleteUser = user;
            this.deleteModal = true;
        },
        destroy(user) {
            axios.delete("/api/usuarios/" + user.PK_id).then(() => {
                this.usuarios = this.paginator.data = this.usuarios.filter(
                    value => value != user
                );
                this.deleteModal = false;
                toastr.info("Usuario Eliminado Correctamente");
            });
        }
    }
});
