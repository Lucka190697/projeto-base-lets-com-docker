@csrf
<div>
    <div class="form-group">
        <label for="book_id" class="float-left">
            @lang('headings.loans.book')
        </label>
        <small class="text-danger float-right"> @errorblock('book_id')</small>
        <select name="book_id" id="book_id"
                class="form-control {{ with_error('book_id', 'border border-danger') }}">
            <option value="">Selecione</option>
            @foreach($books as $book)
                <option value="{{$book->id}}" {{isset($loan->book_id) ? 'selected' : ''}}>
                    {{$book->title}}
                </option>
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <label for="loanLoans_date" class="float-left">
            @lang('headings.loans.loans_date')
        </label>
        <small class="text-danger float-right">@errorblock('loans_date')</small>
        <input type="text"
               name="loans_date"
               class="form-control {{ with_error('loans_date', 'border border-danger') }}"
               id="loanLoans_date"
               placeholder="@lang('headings.loans.loans_date')" maxlength="10"
               onkeypress="$(this).mask('00/00/0000');"
               value="{{old('loans_date') ?? format_date($loan->loans_date, 'd/m/Y') ?? ''}}">
    </div>
    <div class="form-group">
        <label for="loanReturn_date" class="float-left">
            @lang('headings.loans.return_date')
        </label>
        <small class="text-danger float-right"> @errorblock('return_date')</small>
        <input type="text"
               name="return_date"
               class="form-control {{ with_error('return_date', 'border border-danger') }}"
               id="loanReturn_date" placeholder="@lang('headings.loans.return_date')"
               onkeypress="$(this).mask('00/00/0000');"
               value="{{old('return_date') ?? format_date($loan-> return_date, 'd/m/Y') ?? ''}}">
    </div>
</div>