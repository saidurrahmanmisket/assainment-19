<section>
  <div id="posts" class="container py-5"></div>
</section>

<script>
  posts();

  async function posts() {
    try {
      let url = '/postData';
      let response = await axios(url);
      if (200 === response.status) {
        response.data.forEach((item) => {
          document.getElementById('posts').innerHTML += `
            <div class="row justify-content-center mb-3">
              <div class="col-md-12 col-xl-10">
                <div class="card shadow-0 border rounded-3">
                  <a href="/post/${item.id}" class="text-decoration-none text-dark">
                    <div class="card-body">
                      <div class="row">
                        <div class="col-md-6 col-lg-4 col-xl-5 mb-4 mb-lg-0">
                          <div class="bg-image ripple rounded ripple-surface">
                            <img src="${item.img}" class="w-100 img-fluid" />
                          </div>
                        </div>
                        <div class="col-md-6 col-lg-8 col-xl-7">
                          <h4>${item.title}</h4>
                          <p class="mb-3 mb-md-0 text-truncate-multiline">
                            ${item.description}
                          </p>
                        </div>
                      </div>
                    </div>
                  </a>
                </div>
              </div>
            </div>`;
        });
      }
      console.log(response);
    } catch (error) {
      alert(error);
      console.log(error);
    }
  }
</script>
