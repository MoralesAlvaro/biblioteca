

<section class="content">
  <div class="card card-solid">
    <div class="card-body">      
      <div class="card bg-light">
        <div class="card-header text-muted border-bottom-0">
          <h2 class="text-muted"><b> {{$result}}</b></h2>
        </div>
        <div class="card-body ">
          <div class="row">

            {{ $slot }}
            
          </div>
        </div>
      </div>
    </div>
  </div>
</section>