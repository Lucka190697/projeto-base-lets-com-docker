<div v-if="item.links" class="btn-group">
    <a v-if="item.links.show" :href="item.links.show">
        <button type="button" class="btn btn-sm btn-primary">
            <i class="fa fa-eye"></i>
        </button>
    </a>

    <a v-if="item.links.edit" :href="item.links.edit">
        <button type="button" class="btn btn-sm btn-success">
            <i class="fa fa-pencil"></i>
        </button>
    </a>

    <delete-button class="d-inline" :link="item.links.destroy" @deleted="fetchData()">
        <confirmable
                class="d-inline"
                slot-scope="{handleDelete}"
                title="{{$confirmDeleteTitle ?? 'Excluir registro'}}"
                message="{{$confirmDeleteMessage ?? 'Tem certeza que deseja apagar este registro?'}}">
            <a v-if="item.links.destroy"
               slot-scope="{confirm}"
               @click="confirm($event, handleDelete)">
                <button type="button" class="btn btn-sm btn-danger">
                    <i class="fa fa-trash"></i>
                </button>
            </a>
        </confirmable>
    </delete-button>
    @if((isset($title)) && ($title == 'book'))
        <a v-if="item.links.reserve" :href="item.links.reserve">
            <button type="button" class="btn btn-sm btn-warning">
                <i class="fa fa-list"></i>
            </button>
        </a>
    @endif
    @yield('button-actions')
</div>
