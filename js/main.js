const { createApp } = Vue;

const app = createApp({
  data() {
    return {
      tasks: [],
      formData: {},
    };
  },
  methods: {
    fetchTasks() {
      axios.get("api/users.php").then((resp) => {
        this.tasks = resp.data;
      });
    },

    onFormSubmit() {
      axios
        .post("api/createUser.php", this.formData, {
          headers: { "Content-Type": "multipart/form-data" },
        })
        .then((resp) => {
          // ricarico la lista degli utenti
          this.fetchTasks();
        });
    },
  },
  mounted() {
    this.fetchTasks();
  },
}).mount("#app");