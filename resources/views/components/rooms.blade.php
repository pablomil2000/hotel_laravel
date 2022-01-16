<section class="hp-room-section">
    <div class="container-fluid">
        <div class="hp-room-items">
            <div class="row">

                @foreach ($RoomsDetails as $RoomDetail)
                <div class="col-lg-3 col-md-6">
                    <div class="hp-room-item set-bg" data-setbg="{{ $RoomDetail->imagen }}">
                        <div class="hr-text">
                            <h3>{{ $RoomDetail->tipo }} Room</h3>
                            <h2>{{ $RoomDetail->precio }}€<span>/Noche</span></h2>
                            <table>
                                <tbody>
                                    <tr>
                                        <td class="r-o">Size:</td>
                                        <td>{{ $RoomDetail->tamano }} ft</td>
                                    </tr>
                                    <tr>
                                        <td class="r-o">Capacity:</td>
                                        <td>Max persion {{ $RoomDetail->capacidad }}</td>
                                    </tr>
                                    <tr>
                                        <td class="r-o">Bed:</td>
                                        <td>{{ $RoomDetail->tipo_cama }}</td>
                                    </tr>
                                    <tr>
                                        <td class="r-o">Services:</td>
                                        <td>Wifi, Television, Bathroom,...</td>
                                    </tr>
                                </tbody>
                            </table>
                            <a href="#" class="primary-btn">More Details</a>
                        </div>
                    </div>
                </div>
                @endforeach
                
            </div>
        </div>
    </div>
</section>