<div>
    <!-- Container, Row, and Column used for illustration purposes -->
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-8 col-xs-offset-2">

                <!-- Fluid width widget -->
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <span class="glyphicon glyphicon-comment"></span> 
                            Recent Comments
                        </h3>
                    </div>
                    <div class="panel-body">
                        <ul class="media-list">
                            @foreach ($comments as $comment)
                            <li class="media">
                                <div class="media-left">
                                    <img src="http://placehold.it/60x60" class="img-circle">
                                </div>
                                <div class="media-body">
                                    <h4 class="media-heading">
                                        {{$comment['author']}}
                                        <br>
                                        <small>
                                            time on <a href="#">{{$comment['created_at']}}</a>
                                        </small>
                                    </h4>
                                    <p>
                                        {{$comment['body']}}
                                    </p>
                                </div>
                            </li>
                            @endforeach
                            
                        </ul>

                        <form wire:submit.prevent="addComment">
                            <input type="text" wire:model.lazy="newComment" class="form-control" placeholder="add Comment here">
                            <button type="submit" class="btn btn-default btn-block">Add</button>
                        </form>
                        
                    </div>
                </div>
                <!-- End fluid width widget -->

            </div>
        </div>
    </div>
</div>
