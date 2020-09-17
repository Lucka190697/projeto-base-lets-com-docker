@csrf
<div>
    <div class="form-group">
        <label for="userName" class="float-left">@lang('headings.users.name')</label>
        <small class="text-danger float-right">@errorblock('name')</small>
        <input type="text" name="name" class="form-control {{ with_error('name', 'border border-danger') }}" id="userName"
               placeholder="Nome do usuário" value="{{old('name') ?? $user->name ?? ''}}">
    </div>

    <div class="form-group">
        <label for="userEmail" class="float-left">@lang('headings.users.email')</label>
        <small class="text-danger float-right">@errorblock('email')</small>
        <input type="email" name="email" class="form-control {{ with_error('name', 'border border-danger') }}" id="userEmail"
               placeholder="Digite o email" value="{{old('email') ?? $user->email ?? ''}}">
    </div>

    <div class="form-group">
        <label for="userPassword" class="float-left">
            @lang('headings.users.password')
        </label>
        <small class="text-danger float-right">@errorblock('password')</small>
        <input type="password" name="password" class="form-control {{ with_error('name', 'border border-danger') }}"
               id="userPassword" placeholder="Use no mínimo 8 caracteres">
    </div>

    <div class="form-group">
        <label for="confirmPassword" class="float-left">@lang('headings.users.confirmPassword')</label>
        <small class="text-danger float-right">@errorblock('password_confirmation')</small>
        <input type="password" name="password_confirmation" class="form-control {{ with_error('name', 'border border-danger') }}" id="confirmPassword"
               placeholder="Ambas devem ser iguais">
    </div>
</div>