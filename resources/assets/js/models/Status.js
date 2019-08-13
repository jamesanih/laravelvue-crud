class Status{

    static all(then) 
    {
        return axios.get('/getusers')
                 .then(response => this.statuses = response.data);;
    }

}

export default Status;