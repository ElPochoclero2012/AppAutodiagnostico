import axios from 'axios';
import authHeader from '@/services/auth-header';
import config from '@/resources/config';

class UserService {
  getPublicContent() {
    return axios.get(config.API_URL + 'all');
  }

  getUserBoard() {
    return axios.get(config.API_URL + 'me', { headers: authHeader() });
  }
}

export default new UserService();