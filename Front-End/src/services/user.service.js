import axios from 'axios';
import config from '../resources/config.js';


class UserService {
  getPublicContent() {
    return axios.get(config.API_URL + 'all');
  }
}
export default new UserService();