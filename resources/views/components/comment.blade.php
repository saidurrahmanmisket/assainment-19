<!-- Comments section -->
<section class="mb-5">
    <div class="card bg-light">
        <div class="card-body">
            <!-- Comment form -->
            <form id="commentForm" class="mb-4">
                <textarea id="comment" class="form-control" rows="3" placeholder="Join the discussion and leave a comment!"></textarea>
                <button type="submit" class="btn btn-primary my-3">Submit</button>
            </form>
            <!-- Comment with nested comments -->
            <div id="commenter">

            </div>
            <div id="oldComment">

            </div>

        </div>
    </div>
</section>


<script>
    comment();

    async function comment() {
        const postId = window.location.pathname.split('/').pop();



        // new comment 

        document.getElementById('commentForm').addEventListener('submit', async (event) => {
            event.preventDefault();

            try {
                let comment = document.getElementById('comment').value;
                let url = '/comments';
                let data = {
                    "userID": "1",
                    "postID": postId,
                    "comment": comment
                };
                let post = await axios.post(url, data);
                document.getElementById('comment').value = '';

                  let firstUrl = '/firstComment';
            let firstResult = await axios.get(firstUrl);
            if (200 === firstResult.status) {
                const thisPostId = window.location.pathname.split('/').pop();

                if (firstResult.data.postID == thisPostId) {


                    document.getElementById('commenter').innerHTML =
                        (`
                        
                        <div class="d-flex mb-4">
                        <div class="flex-shrink-0"><img class="rounded-circle" src="https://dummyimage.com/50x50/ced4da/6c757d.jpg" alt="..." /></div>
                        <div class="ms-3">
                        <div class="fw-bold">Commenter Name</div>
                        ${firstResult.data.comment}
                        </div>
                        </div>
                        
                        `)


                }

            };

            } catch (error) {
                console.log(error);
            }

          


        })

        // if (201 == post.status) {

        //         document.getElementById('commenter').innerHTML =
        //             (`

        //     <div class="d-flex mb-4">
        //     <div class="flex-shrink-0"><img class="rounded-circle" src="https://dummyimage.com/50x50/ced4da/6c757d.jpg" alt="..." /></div>
        //     <div class="ms-3">
        //         <div class="fw-bold">Commenter Name</div>
        //             ${comment}
        //         </div>
        // </div>

        //     `)

        //         document.getElementById('comment').value = '';





        let getUrl = '/getComments';
        let result = await axios.get(getUrl);
        if (200 === result.status) {
            result.data.forEach((item) => {
                const thisPostId = window.location.pathname.split('/').pop();

                if (item.postID == thisPostId) {


                    document.getElementById('oldComment').innerHTML +=
                        (`
                        
                        <div class="d-flex mb-4">
                        <div class="flex-shrink-0"><img class="rounded-circle" src="https://dummyimage.com/50x50/ced4da/6c757d.jpg" alt="..." /></div>
                        <div class="ms-3">
                        <div class="fw-bold">Commenter Name</div>
                        ${item.comment}
                        </div>
                        </div>
                        
                        `)
                }
            })
        }
        // }




        // // old comment 
        // try {

        //     let getUrl = '/getComments';
        //     let result = await axios.get(getUrl);
        //     if (200 === result.status) {
        //         result.data.forEach((item) => {
        //             const thisPostId = window.location.pathname.split('/').pop();

        //             if (item.postID == thisPostId) {


        //                 document.getElementById('oldComment').innerHTML +=
        //                     (`

        //                 <div class="d-flex mb-4">
        //                 <div class="flex-shrink-0"><img class="rounded-circle" src="https://dummyimage.com/50x50/ced4da/6c757d.jpg" alt="..." /></div>
        //                 <div class="ms-3">
        //                 <div class="fw-bold">Commenter Name</div>
        //                 ${item.comment}
        //                 </div>
        //                 </div>

        //                 `)
        //             }
        //         })
        //     }
        // } catch (error) {
        //     console.log(error);
        // }


    }
</script>