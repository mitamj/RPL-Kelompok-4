import {Injectable} from '@angular/core';
import barang from './mock-barang';

@Injectable()
export class BarangService {

    findAll() {
        return Promise.resolve(barang);
    }

    findById(jenis) {
        return Promise.resolve(barang[jenis - 1]);
    }

}
