package com.example.uploadimage;

import retrofit2.Call;
import retrofit2.http.Field;
import retrofit2.http.FormUrlEncoded;
import retrofit2.http.POST;

public interface ApiInterface {

    @FormUrlEncoded
    @POST("uploadImage.php")
    Call<Img_Pojo> uploadImage(@Field("image_name") String title, @Field("image") String image);

}
