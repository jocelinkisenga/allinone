



    <div wire:ignore.self class="modal fade" id="modalEx{{$product_id}}" tabindex="-1" role="dialog">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="ti-close" aria-hidden="true"></span></button>
                </div>
                <div class="modal-body">
                    <div class="row no-gutters">
                        <div class="col-lg-6 offset-lg-3 col-12">
                            <h4 style="margin-top:100px;font-size:14px; font-weight:500; color:#F7941D; display:block; margin-bottom:5px;"></h4>
                            <h3 style="font-size:30px;color:#333;">modifier la quantité {{$product_id}}<h3>
                                <form>
                            <p style="display:block; margin-top:20px; color:#888; font-size:14px; font-weight:400;">
                                <input type="text" width="50%" wire:model.lazy="quantity" id="" > <span><button type="submit" class="btn btn-primary" wire:click.prevent="add({{$product_id}})"> ajouter</button></span>
                            </p>
                        </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>
