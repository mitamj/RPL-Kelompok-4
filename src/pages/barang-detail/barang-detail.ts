import {Component} from '@angular/core';
import {NavController, NavParams} from 'ionic-angular';
import {BarangService} from '../../providers/barang-service-mock';

@Component({
    selector: 'page-barang-detail',
    templateUrl: 'barang-detail.html'
})
export class BarangDetailPage {

    barang: any;

    constructor(public navCtrl: NavController, public navParams: NavParams, public service: BarangService) {
        this.barang = this.navParams.data;
        service.findById(this.barang.id).then(
            barang => this.barang = barang
        );
    }

}
