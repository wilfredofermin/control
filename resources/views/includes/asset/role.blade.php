            <!-- Roles -->
          @if (Auth::user()->is_admin)
              <span class="label label-success">ADMIN </span>
             @elseif(Auth::user()->is_support)
              <span class="label label-info">SUPERVISOR </span>
          @elseif(Auth::user()->is_evaluador)
              <span class="label label-danger">EVALUDOR </span>
          @else
              <span class="label label-warning">USUARIO </span>
          @endif