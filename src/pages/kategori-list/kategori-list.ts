import {Component} from '@angular/core';
import {NavController} from 'ionic-angular';
import {BrokerService} from '../../providers/broker-service-mock';
import {BrokerDetailPage} from '../broker-detail/broker-detail';

@Component({
    selector: 'page-kategori-list',
    templateUrl: 'kategori-list.html'
})
export class KategoriListPage {

    brokers: Array<any>;

    constructor(public navCtrl: NavController, public service: BrokerService) {
        service.findAll().then(data => this.brokers = data);
    }

    openBrokerDetail(broker) {
        this.navCtrl.push(BrokerDetailPage, broker);
    }

}
