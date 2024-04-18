const { createApp } = Vue;

createApp({

  data() {
    return {
      apiUrl: 'server.php',
      list: [],
      newDisk: {
        title: '',
        author: '',
        poster: '',
      }
    }
  },
  methods: {
    getApi() {
      axios.get(this.apiUrl)
        .then(result => {
          this.list = result.data;
        })
    },
    addNewDisk() {
      const data = new FormData();
      data.append('newDiskTitle', this.newDisk.title);
      data.append('newDiskAuthor', this.newDisk.author);
      data.append('newDiskPoster', this.newDisk.poster);

      axios.post(this.apiUrl, data)
        .then(result => {
          this.list = result.data;
        })
    }
  },
  mounted() {
    this.getApi()
  }
}).mount('#app')