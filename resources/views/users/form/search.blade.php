<!-- Search Bar -->
{!! Form::open(array('url'=>'/user','method'=>'GET','autocomplete'=>'off','role'=>'search','id'=>'search-form')) !!}
<div class="search-bar">
    <div class="search-icon">
        <i class="material-icons">search</i>
    </div>
    <input id="txtSearch" type="text" name="searchText" value="{{$searchText}}" placeholder="Buscar...">
                  
    <div class="close-search">
        <i class="material-icons">close</i>
    </div>
</div>
{!! Form::close() !!}
<!-- #END# Search Bar -->

