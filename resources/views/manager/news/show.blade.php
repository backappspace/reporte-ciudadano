@extends('manager.app')

@section('content')
<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Noticia</h1>
    </div>
    <div class="container-fluid">
        <div class="col-md-12">
            <div class="row">
               

                <div class="col-md-12 mx-auto">

                  <div class="row">
                    <div class="col-md-12  news-item py-3 px-3">
                      <h1 class="font-arial-black">¡Hoy gran da para conocer el nuevo Acapulco!</h1>
                      <p>10 De Diciembre del 2018</p>
                    </div>
                    <div class="col-md-12  news-item py-3 px-3">
                          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
                              <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                              <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                              <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                            </ol>
                            <div class="carousel-inner carousel-size">
                              <div class="carousel-item active">
                                <img class="d-block w-100 carousel-size" width="400px" src="https://media.istockphoto.com/photos/acapulco-beach-picture-id483179038?k=6&m=483179038&s=612x612&w=0&h=hLeCFJeu5wRVjIkeEFvVoKwR9NjCeTVE63tZEIRNwUI=" alt="First slide">
                              </div>
                              <div class="carousel-item">
                                <img class="d-block w-100 carousel-size" width="400px" src="https://media.istockphoto.com/photos/la-quebrada-cliffs-and-promenade-in-acapulco-mexico-picture-id543202324?k=6&m=543202324&s=612x612&w=0&h=xIccDKU6GeDrITPSTrSbJasKf-19-WdLs_FuEZo5Cwg=" alt="Second slide">
                              </div>
                              <div class="carousel-item">
                                <img class="d-block w-100 carousel-size"  width="400px" src="https://media.istockphoto.com/photos/acapulco-mexico-colleta-bay-marina-picture-id112259601?k=6&m=112259601&s=612x612&w=0&h=o-6BWHjwZ84BKxT6l6WUNVJ0nTrUcEOpw_PiIHiytUc=" alt="Third slide">
                              </div>
                            </div>
                            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                              <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                              <span class="carousel-control-next-icon" aria-hidden="true"></span>
                              <span class="sr-only">Next</span>
                            </a>
                          </div>
                    </div>
                    <div class="col-md-12  news-item py-3 px-3">
                      <p class="font-times-new-roman">
                        "Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum."
                      </p>
                      <p class="font-times-new-roman">
                        "Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo voluptas nulla pariatur?"
                      </p>
                      <p class="font-times-new-roman">
                        "But I must explain to you how all this mistaken idea of denouncing pleasure and praising pain was born and I will give you a complete account of the system, and expound the actual teachings of the great explorer of the truth, the master-builder of human happiness. No one rejects, dislikes, or avoids pleasure itself, because it is pleasure, but because those who do not know how to pursue pleasure rationally encounter consequences that are extremely painful. Nor again is there anyone who loves or pursues or desires to obtain pain of itself, because it is pain, but because occasionally circumstances occur in which toil and pain can procure him some great pleasure. To take a trivial example, which of us ever undertakes laborious physical exercise, except to obtain some advantage from it? But who has any right to find fault with a man who chooses to enjoy a pleasure that has no annoying consequences, or one who avoids a pain that produces no resultant pleasure?"
                      </p>
                    </div>
                  </div>

                  
                </div>
              
            </div>
        </div>
    </div>
@endsection
