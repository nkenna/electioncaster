<template>
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Example Component</div>

                    <div id="am" class="panel-body">
                        I'm an example component!
                        <p> {{ message }} </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        el: "#am",
        data() {
            return{}
            message: 'ugwumsonachi'
        }
        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
