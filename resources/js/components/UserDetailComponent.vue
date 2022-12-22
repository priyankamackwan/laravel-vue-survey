<template>
    <div>
        <div class="container rounded bg-white mt-5 mb-5">
            <div class="row">
                <div class="col-md-3 border-right">
                    <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" width="150px" src="https://st3.depositphotos.com/15648834/17930/v/600/depositphotos_179308454-stock-illustration-unknown-person-silhouette-glasses-profile.jpg"><span class="font-weight-bold">Edogaru</span><span class="text-black-50">edogaru@mail.com.my</span><span> </span></div>
                </div>
                <div class="col-md-5 border-right">
                    <div class="p-3 py-5">
                        <div class="d-flex justify-content-between align-items-center mb-3">
                            <h4 class="text-right">Profile Settings</h4>
                        </div>
                        <div class="row mt-2">
                            <div class="col-md-6"><label class="labels">Name</label><input type="text" name="name" :class="['form-control', allerros.name ? 'is-invalid' : '']" placeholder="First name" value="" v-model="datas.name">
                                <span v-if="allerros.name" :class="['label text-danger']">{{ allerros.name[0] }}</span>
                            </div>
                            <div class="col-md-6"><label class="labels">Surname</label><input type="text" name="surname" :class="['form-control', allerros.surname ? 'is-invalid' : '']" value="" placeholder="Surname" v-model="datas.surname">
                                <span v-if="allerros.surname" :class="['label text-danger']">{{ allerros.surname[0] }}</span>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12">
                                <label class="labels">Mobile Number</label>
                                <input type="text" name="mobile" :class="['form-control', allerros.mobile ? 'is-invalid' : '']" placeholder="Enter phone number" value="" v-model="datas.mobile">
                                <span v-if="allerros.mobile" :class="['label text-danger']">{{ allerros.mobile[0] }}</span>
                            </div>
                            <div class="col-md-12">
                                <label class="labels">Address Line 1</label>
                                <input type="text" name="addr_1" :class="['form-control', allerros.addr_1 ? 'is-invalid' : '']" placeholder="Enter address line 1" value="" v-model="datas.addr_1">
                                <span v-if="allerros.addr_1" :class="['label text-danger']">{{ allerros.addr_1[0] }}</span>
                            </div>
                            <div class="col-md-12">
                                <label class="labels">Address Line 2</label>
                                <input type="text" name="addr_2" :class="['form-control', allerros.addr_2 ? 'is-invalid' : '']" placeholder="Enter address line 2" value="" v-model="datas.addr_2">
                                <span v-if="allerros.addr_2" :class="['label text-danger']">{{ allerros.addr_2[0] }}</span>
                            </div>
                            <div class="col-md-12">
                                <label class="labels">Postcode</label>
                                <input type="text" name="postcode" :class="['form-control', allerros.postalcode ? 'is-invalid' : '']" placeholder="Enter postal code" value="" v-model="datas.postalcode">
                                <span v-if="allerros.postalcode" :class="['label text-danger']">{{ allerros.postalcode[0] }}</span>
                            </div>
                            <div class="col-md-12">
                                <label class="labels">State</label>
                                <input type="text" name="state" :class="['form-control', allerros.state ? 'is-invalid' : '']" placeholder="Enter state" value="" v-model="datas.state">
                                <span v-if="allerros.state" :class="['label text-danger']">{{ allerros.state[0] }}</span>
                            </div>
                            <div class="col-md-12">
                                <label class="labels">Area</label>
                                <input type="text" name="area" :class="['form-control', allerros.area ? 'is-invalid' : '']" placeholder="Enter area" value="" v-model="datas.area">
                                <span v-if="allerros.area" :class="['label text-danger']">{{ allerros.area[0] }}</span>
                            </div>
                            <div class="col-md-12">
                                <label class="labels">Email ID</label>
                                <input type="text" name="email" :class="['form-control', allerros.email ? 'is-invalid' : '']" placeholder="Enter email id" value="" v-model="datas.email">
                                <span v-if="allerros.email" :class="['label text-danger']">{{ allerros.email[0] }}</span>
                            </div>
                            <div class="col-md-12">
                                <label class="labels">Education</label>
                                <input type="text" name="education" :class="['form-control', allerros.education ? 'is-invalid' : '']" placeholder="Education" value="" v-model="datas.education">
                                <span v-if="allerros.education" :class="['label text-danger']">{{ allerros.education[0] }}</span>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-12"><label class="labels">Gender</label>
                            <div>
                                <input type="radio" id="male" name="gender" value="male" v-model="datas.gender"
                                    checked>
                                <label class="labels" for="male">Male</label>
                            
                                <input type="radio" id="female" name="gender" value="female" v-model="datas.gender">
                                <label class="labels" for="female">Female</label>
                            </div>
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-6">
                                <label class="labels">Country</label>
                                <input type="text" name="country" :class="['form-control', allerros.country ? 'is-invalid' : '']" placeholder="Country" value="" v-model="datas.country">
                                <span v-if="allerros.country" :class="['label text-danger']">{{ allerros.country[0] }}</span>
                            </div>
                            <div class="col-md-6">
                                <label class="labels">State/Region</label>
                                <input type="text" name="region" :class="['form-control', allerros.region ? 'is-invalid' : '']" value="" placeholder="State" v-model="datas.region">
                                <span v-if="allerros.region" :class="['label text-danger']">{{ allerros.region[0] }}</span>
                            </div>
                        </div>
                        <div class="mt-5 text-center"><button class="btn btn-primary profile-button" @click="save" type="button">{{ isEditing ? "Update" : "Save" }}</button>
                        <button class="btn btn-primary profile-button" @click="reset" type="button">Reset</button></div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="p-3 py-5">
                        <div class="d-flex justify-content-between align-items-center experience"><span>Edit Experience</span><span class="border px-3 p-1 add-experience"><i class="fa fa-plus"></i>&nbsp;Experience</span></div><br>
                        <div class="col-md-12">
                            <label class="labels">Experience in Designing</label>
                            <input type="text" name="experience_design" :class="['form-control', allerros.experience ? 'is-invalid' : '']" class="form-control" placeholder="Experience" value="" v-model="datas.experience">
                            <span v-if="allerros.experience" :class="['label text-danger']">{{ allerros.experience[0] }}</span>
                        </div> <br>
                        <div class="col-md-12">
                            <label class="labels">Additional Details</label>
                            <input type="text" name="additional_detail" :class="['form-control', allerros.additional_detail ? 'is-invalid' : '']" placeholder="Additional details" value="" v-model="datas.additional_detail">
                            <span v-if="allerros.additional_detail" :class="['label text-danger']">{{ allerros.additional_detail[0] }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container rounded bg-white mt-5 mb-5">
            <table class="table">
                <thead>
                    <tr>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th>Education</th>
                    <th>country</th>
                    <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="list in lists">
                    <td> {{ list.name }} </td>
                    <td> {{ list.email }} </td>
                    <td> {{ list.mobile }} </td>
                    <td> {{ list.education }} </td>
                    <td> {{ list.country }} </td>
                    <td> <button
                        class="btn btn-warning btn-sm mr-2"
                        @click="editDetail(list)"
                    >Edit</button>
                    <button
                        class="btn btn-danger btn-sm mr-2"
                        @click="deleteDetail(list.id)"
                    >Delete</button> </td>
                    </tr>
                </tbody>
              </table>
              
        </div>
    </div>
</template>

<script>
    export default {
        name: "UserDetail",
        data() {
            return {
                lists: [],
                datas: {
                    name: "",
                    surname: "",
                    mobile: "",
                    addr_1: "",
                    addr_2: "",
                    postalcode: "",
                    state: "",
                    area: "",
                    email: "",
                    education: "",
                    gender: "male",
                    country: "",
                    region: "",
                    experience: "",
                    additional_detail: ""
                },
                isEditing: false,
                temp_id: null,
                allerros: []
            }
        },
        mounted() {
            this.fetchAll()
            console.log('Component mounted.')
        },
        methods: {
            fetchAll() {
                try {
                    axios.get('/api/user-details')
                        .then(res => this.lists = res.data)
                } catch (e) {
                    console.log(e)
                }
            },
            save() {
                let method = axios.post
                let url = "/api/user-details"
                if (this.temp_id) {
                    method = axios.put
                    url = `/api/user-details/${this.temp_id}`
                }
                method(url, this.datas)
                .then(res => {
                    this.fetchAll()
                    this.datas = {
                        name: "",
                        surname: "",
                        mobile: "",
                        addr_1: "",
                        addr_2: "",
                        postalcode: "",
                        state: "",
                        area: "",
                        email: "",
                        education: "",
                        gender: "",
                        country: "",
                        region: "",
                        experience: "",
                        additional_detail: ""
                    }
                    this.temp_id = null
                    this.isEditing = false
                    this.allerros = [];
                    flash('User Details Created or Updated.', 'success');
                }).catch(e => {
                    this.allerros = e.response.data.errors
                })
            },
 
            deleteDetail(id) {
                try {
                    axios.delete(`/api/user-details/${id}`)
                    .then(res => {
                        this.fetchAll()
                        flash('Detail Deleted Success.', 'success');
                    })
                } catch (e) {
                    console.log(e)
                }
            },

            editDetail(user) {
                this.datas = {
                    name: user.name,
                    surname: user.surname,
                    mobile: user.mobile,
                    addr_1: user.addr_1,
                    addr_2: user.addr_2,
                    postalcode: user.postal_code,
                    state: user.state,
                    area: user.area,
                    email: user.email,
                    education: user.education,
                    gender: user.gender,
                    country: user.country,
                    region: user.region,
                    experience: user.experience_design,
                    additional_detail: user.additional_detail
                }
                this.temp_id = user.id;
                this.isEditing = true
            },

            reset() {
                this.datas = {gender: 'male'}
                this.isEditing = false
                this.allerros = []
                flash('Form reset success.', 'success');
            }
        }

    }
</script>
