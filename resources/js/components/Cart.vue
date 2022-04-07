<template>
    <div>
        <li class="nav-item" style="background-color: #ffff"   >
            <a href="/checkout" 
                class="main-btn-add">
                    Cart {{itemCount}}
            
            <img :src="image" height="20px" width="30px" /> 
            </a>

        </li>
    </div>
</template>

<script>
    import image from '../../../public/images/cart.png'
    export default {
        data(){ 
            return {
                image: image,
                itemCount: '',
            }
        },
        mounted() {
            this.$root.$on('changeInCart', (item) => {
                this.itemCount = item;
            })
        },
        methods:{
            async getCartItemsOnPageLoad(){
                let response = await axios.post('/cart');
                this.itemCount =response.data.items
            }
        },
        created(){
            this.getCartItemsOnPageLoad();
        }
    }
</script>
