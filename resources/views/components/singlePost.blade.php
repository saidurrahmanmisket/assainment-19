<!-- <div class="container mt-5">
    <div class="col-lg-8"> -->
<!-- Post content-->
<div id="singlePost" class="row">
  
</div>

<!-- </div>
              
</div> -->

<script>

const postId = window.location.pathname.split('/').pop();


posts(postId);

  async function posts(id) {
    try {
      let url = `/postData`;
      let response = await axios(url);
      if (200 === response.status) {
        const post = response.data[postId-1];
        document.getElementById('singlePost').innerHTML = (`
          <article>
            <!-- Post header -->
            <header class="my-4">
              <!-- Post title -->
              <h1 class="fw-bolder mb-1">${post.title}</h1>
              <!-- Post meta content -->
              <div class="text-muted fst-italic mb-2">Posted on ${post.created_at} by admin </div>
              <!-- Post categories -->
              <a class="badge bg-secondary text-decoration-none link-light" href="#!">Web Design</a>
              <a class="badge bg-secondary text-decoration-none link-light" href="#!">Freebies</a>
            </header>
            <!-- Preview image figure -->
            <figure class="mb-4"><img class="img-fluid rounded" src="${post.img}" alt="..." /></figure>
            <!-- Post content -->
            <section class="mb-5">
              ${post.description}
            </section>
          </article>               
        `);
      }
      // console.log(response.data[postId-1]);
    } catch (error) {
      alert(error);
      console.log(error);
    }
  }
</script>
