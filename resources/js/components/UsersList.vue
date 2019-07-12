<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Example Component</div>

                    <div class="card-body">
                        <table border="1">
                            <tr>
                                <th>Id</th>
                                <th>Name</th>
                                <th>Email</th>
                            </tr>
                            <tr v-for="user in users" :key="user.id">
                                <td>{{ user.id }}</td>
                                <td>{{ user.name }}</td>
                                <td>{{ user.email }}</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data(){
            return{
                users : {},
                config : {
                    //mengirim data tipe headers 
                        headers: {
                                    //dengan key authorization(auth): Bearer + Token API nya
                                    Authorization: "Bearer " + 'eyJ0eXAiOiJKV1QiLCJhbGciOiJSUzI1NiIsImp0aSI6ImMyZjQ2YmRkNTlmMDUyYWU2M2NjMjdhOGE5NWEwZmUxNWQyMDVhYjg0ZmIxNzgzN2E5ZGEzY2JkMmJkNGU1NTkxZmQ3NDNmNTA3OWY5YzY2In0.eyJhdWQiOiIxIiwianRpIjoiYzJmNDZiZGQ1OWYwNTJhZTYzY2MyN2E4YTk1YTBmZTE1ZDIwNWFiODRmYjE3ODM3YTlkYTNjYmQyYmQ0ZTU1OTFmZDc0M2Y1MDc5ZjljNjYiLCJpYXQiOjE1NTkzMjYxOTksIm5iZiI6MTU1OTMyNjE5OSwiZXhwIjoxNTkwOTQ4NTk5LCJzdWIiOiIxIiwic2NvcGVzIjpbXX0.7DLGJ9E-FWlYI2L5VpgMJYSgp-7THBOOhZ1juBWHpQTSFrq0NRg08UgbN77amQG_0I9zTobYcJqVJ6J4jI30jC08FSXXrOn3EwIWlV35AFxTqqk3REHqY67hPVTSYf6s0VyvFXovU7SP5ZYEHENKaFutVKxemabZRr4NVUh2Jwcp_emCN2q8y79iyWr8ObxALa9DBmjNEZni0hReLINdkWtkG6g_TJm4vyQI92JO38pZL7XnXa39XBEoMVyW62qCtWak3WR_onhE7BKEDvnwvrM-neTE5NIuDY_JAYdhcgrb0YBmrFRelf7FgAxMvCcgL4T2ypSgaoL2B5iJjhgm-hm86TheKwCaRJF0cvg0uZvyUs61cdqAvj5yzFER-8f2wxJIJ-4SfrIV8g_qDtEIhfvliwxiDoSaUXPk0k2DocbNUXLeEbVkOyluIkgynLP4lVIiuiz_3HOv7cRG5eGJ1S5FUb7b8d_RqOzDtoPQlXwsBYrlj8WfKa9ihbM6ItARKhFPuIF8P6Ovfnx-MBfoD2s6vSkH3aIlSEWTDegr1hbgSLBSCycYYYJRtD1PKtquCqzh6fTlCnDkf6FWzREjIfqgL_8QOdkhCloIDx4C5JAUfP_jpffBkbRWmY2Imx6KA3x1jyKATsgbh_vLXekZQ4N28040Ej-LyT_oYrSxx-0',
                                    //dengan content type json
                                    'Content-Type': 'application/json'
                                }
                            }
            }
        },
        methods: {
            getUsers(){
                axios.get('/api/users', config).then((res) => {
                    this.users = res.data
                    console.log(this.users)
                }).catch(() => {

                })
            }
        },
        mounted() {
            this.getUsers()
            console.log('Component mounted.')
        }
    }
</script>

